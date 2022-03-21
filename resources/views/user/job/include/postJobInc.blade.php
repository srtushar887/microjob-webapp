@section('js')
    <script>
        $(document).ready(function () {
            $('.country_name').change(function () {
                let reg_name = $("input[name='region_name']:checked").val();
                let coun_id = [];

                $('.country_name').each(function () {
                    if ($(this).prop('checked') == true) {
                        coun_id.push($(this).val())
                    }
                });


                $.ajax({
                    type: "POST",
                    url: "{{route('user.post.job.get.all.main.category')}}",
                    data: {
                        '_token': "{{csrf_token()}}",
                        'reg_name': reg_name,
                        'coun_id': coun_id
                    },
                    success: function (data) {
                        console.log(data)
                        $('.main_cats').empty();
                        $.each(data, function (index, value) {
                            $('.main_cats').append(
                                `
                             <li class="list-inline-item mb-2">
                                            <button type="button"
                                                    class="btn btn-sm btn-outline-primary"
                                                    data-bs-toggle="tab" data-bs-target="#assignment">
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio"
                                                               class="form-check-input d-none main_cat_name" value="${value.id}"
                                                               name="main_category">${value.category_name}
                                                    </label>
                                                </div>
                                            </button>
                                        </li>
                            `
                            );
                        });

                        $('.main_cat_name').each(function (tab, index) {
                            if (index == 0) {
                                tab.removeClass('active');
                            }
                        });


                    }
                });


            });




            $(document).on('change', '.main_cat_name', function () {
                let reg_name = $("input[name='region_name']:checked").val();
                let coun_id = [];

                $('.country_name').each(function () {
                    if ($(this).prop('checked') == true) {
                        coun_id.push($(this).val())
                    }
                });
                let main_cat = $("input[name='main_category']:checked").val();


                console.log(reg_name);
                console.log(coun_id);
                console.log(main_cat);


                $.ajax({
                    type: "POST",
                    url: "{{route('user.post.job.get.all.sub.category')}}",
                    data: {
                        '_token': "{{csrf_token()}}",
                        'reg_name': reg_name,
                        'coun_id': coun_id,
                        'main_cat': main_cat,
                    },
                    success: function (data) {
                        console.log(data)
                        $('.sub_cats').empty();
                        $.each(data, function (index, value) {
                            $('.sub_cats').append(
                                `
                            <li class="list-inline-item mb-3">
                                                    <button type="button" class="btn btn-sm btn-light">
                                                        <label class="form-check-label">
                                                            <input type="radio"
                                                                   class="form-check-input d-none sub_cat_name" value="${value.id}"
                                                                   name="sub_category">${value.category_name}
                                                        </label>
                                                    </button>
                                                </li>
                            `
                            );
                        });

                        $('.sub_cat_name').each(function (tab, index) {
                            if (index == 0) {
                                tab.removeClass('active');
                            }
                        });


                    }
                });

            });




            $(document).on('click', '.job-sub-category button', function () {
                $(".job-sub-category button").removeClass("active");
                $(this).addClass("active");
            });



            $(document).on('change', '.sub_cat_name', function () {
                let sub_cat_id = $("input[name='sub_category']:checked").val();
                $.ajax({
                    type: "POST",
                    url: "{{route('user.post.job.get.sub.category.price')}}",
                    data: {
                        '_token': "{{csrf_token()}}",
                        'sub_cat_id': sub_cat_id,
                    },
                    success: function (data) {
                        console.log(data)
                        $('.cat_amount').val(data.category_price);
                        $('.each_worker_earn').val(data.category_price);
                        showTotalAmount();

                    }
                });
            });


            $('.worker_need').keyup(function () {
                showTotalAmount();
            });

            $('.each_worker_earn').change(function () {
                let cat_am = $('.cat_amount').val();
                let eran_money = parseFloat($(this).val(), 2);
                if (cat_am > eran_money) {
                    alert('cant');
                    $('.each_worker_earn').val(cat_am);
                } else {
                    showTotalAmount();
                }


            });


            $('.screen_short').change(function () {
                showTotalAmount();
            });


            function showTotalAmount() {
                let service_charge = "{{$gen_settings->service_charge}}";
                let screen_short_price = "{{$gen_settings->screenshot_price}}";
                let each_workder_earn = $('.each_worker_earn').val();
                let worker = $('.worker_need').val();

                let sub_total = parseFloat(worker, 2) * parseFloat(each_workder_earn, 2);
                let charge = (sub_total * service_charge) / 100;

                let screen_short = $('.screen_short').val();
                let screen_short_total = screen_short * screen_short_price;


                let total = parseFloat(sub_total, 2) + parseFloat(charge, 2) + screen_short_total;
                $('.est_job_cost').val(parseFloat(total, 2));


            };



            $("#fileup").change(function () {
                $('#wizardPicturePreview').attr('src', '');
                readURL(this);
            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#wizardPicturePreview').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }




        })
    </script>
@endsection
