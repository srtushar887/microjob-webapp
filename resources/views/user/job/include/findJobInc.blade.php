@section('js')
    <script>
        $('.loading').hide();
        $(window).on('hashchange', function () {
            if (window.location.hash) {
                var page = window.location.hash.replace('#', '');
                if (page == Number.NaN || page <= 0) {
                    return false;
                } else {
                    getData(page);
                }
            }
        });
        $(document).ready(function () {

            $(document).on('click', '.pagination a', function (event) {
                event.preventDefault();


                $('li').removeClass('active');
                $(this).parent('li').addClass('active');

                var myurl = $(this).attr('href');
                // console.log(myurl);
                var newurl = myurl.substr(0, myurl.length - 1);

                var page = $(this).attr('href').split('page=')[1];
                var newurldata = (newurl + page);
                // console.log(newurldata);
                getData(myurl);
            });

            $('.reg_fil').change(function () {
                $('.loading').show();
                let reg_fil = $('.reg_fil').val();
                $.ajax({
                    type: "POST",
                    url: "{{route('user.job.find.mcat.by.reg')}}",
                    data: {
                        '_token': "{{csrf_token()}}",
                        'reg_fil': reg_fil,
                    },
                    success: function (data) {
                        console.log(data);
                        $('.mcat_filter').empty();
                        $('.mcat_filter').append(
                            `<option value="0">select any</option>`
                        )
                        $.each(data, function (index, value) {
                            $('.mcat_filter').append(
                                `<option value="${value.id}">${value.category_name}</option>`
                            )
                        })
                        $('.loading').hide();
                    }
                });
            });


            $('.mcat_filter').change(function () {
                $('.loading').show();
                let mcat_filter = $('.mcat_filter').val();
                let country_filter = $('.country_filter').val();
                let reg_fil = $('.reg_fil').val();
                $.ajax({
                    type: "POST",
                    url: "{{route('user.job.find.scat.by.mcat')}}",
                    data: {
                        '_token': "{{csrf_token()}}",
                        'mcat_filter': mcat_filter,
                        'country_filter': country_filter,
                        'reg_fil': reg_fil,
                    },
                    success: function (data) {
                        console.log(data);
                        $('.scat_filter').empty();
                        $('.scat_filter').append(
                            `<option value="0">select any</option>`
                        )
                        $.each(data, function (index, value) {
                            $('.scat_filter').append(
                                `<option value="${value.id}">${value.category_name}</option>`
                            )
                        });

                        $('.loading').hide();
                    }
                });
            });

            $('.loading').show();
            $.ajax({
                type: "POST",
                url: "{{route('user.find.job.get.all')}}",
                data: {
                    '_token': "{{csrf_token()}}",
                },
                success: function (data) {
                    console.log(data);
                    $('.all_jobs').empty();
                    $('.all_jobs').html(data.view);
                    $('.loading').hide();
                }
            });


            $('#goBtn').click(function () {
                $('.loading').show();
                let reg_fil = $('.reg_fil').val();
                let country_filter = $('.country_filter').val();
                let mcat_filter = $('.mcat_filter').val();
                let scat_filter = $('.scat_filter').val();
                let search_title = $('.search_title').val();
                $.ajax({
                    type: "POST",
                    url: "{{route('user.find.job.get.all')}}",
                    data: {
                        '_token': "{{csrf_token()}}",
                        'reg_fil': reg_fil,
                        'country_filter': country_filter,
                        'mcat_filter': mcat_filter,
                        'scat_filter': scat_filter,
                        'search_title': search_title,
                    },
                    success: function (data) {
                        console.log(data);
                        $('.all_jobs').empty();
                        $('.all_jobs').html(data.view);
                        $('.loading').hide();
                    }
                });
            })


        });


        function getData(myurl) {
            $('.loading').show();
            let reg_fil = $('.reg_fil').val();
            let country_filter = $('.country_filter').val();
            let mcat_filter = $('.mcat_filter').val();
            let scat_filter = $('.scat_filter').val();
            let search_title = $('.search_title').val();
            $.ajax(
                {
                    url: myurl,
                    type: "get",
                    data: {
                        '_token': "{{csrf_token()}}",
                        'reg_fil': reg_fil,
                        'country_filter': country_filter,
                        'mcat_filter': mcat_filter,
                        'scat_filter': scat_filter,
                        'search_title': search_title,
                    },
                    datatype: "html"
                }).done(function (data) {
                $('.all_jobs').empty();
                $('.all_jobs').html(data.view);
                $('.loading').hide();

            }).fail(function (jqXHR, ajaxOptions, thrownError) {
                alert('No response from server');
            });
        }

    </script>
@endsection
