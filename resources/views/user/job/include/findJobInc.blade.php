@section('js')
    <script>
        $(window).on('hashchange', function() {
            if (window.location.hash) {
                var page = window.location.hash.replace('#', '');
                if (page == Number.NaN || page <= 0) {
                    return false;
                }else{
                    getData(page);
                }
            }
        });
        $(document).ready(function () {

            $(document).on('click', '.pagination a',function(event)
            {
                event.preventDefault();


                $('li').removeClass('active');
                $(this).parent('li').addClass('active');

                var myurl = $(this).attr('href');
                // console.log(myurl);
                var newurl = myurl.substr(0,myurl.length-1);

                var page=$(this).attr('href').split('page=')[1];
                var newurldata = (newurl+page);
                // console.log(newurldata);
                getData(myurl);
            });

            $.ajax({
                type : "POST",
                url: "{{route('user.find.job.get.all')}}",
                data : {
                    '_token' : "{{csrf_token()}}",
                },
                success:function(data){
                    console.log(data);
                    $('.all_jobs').empty();
                    $('.all_jobs').html(data.view);
                }
            });
        });



        function getData(myurl){
            $.ajax(
                {
                    url: myurl,
                    type: "get",
                    data : {
                        '_token' : "{{csrf_token()}}",
                    },
                    datatype: "html"
                }).done(function(data){
                $('.all_jobs').empty();
                $('.all_jobs').html(data.view);

            }).fail(function(jqXHR, ajaxOptions, thrownError){
                alert('No response from server');
            });
        }

    </script>
@endsection
