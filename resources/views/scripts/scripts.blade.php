<script src="https://code.jquery.com/jquery-3.6.4.min.js" 
integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" 
crossorigin="anonymous">
</script>


<script>

function g10Dashboard() {
        event.preventDefault();
        const CSRF_TOKEN = $('meta[name = "crsf-token"]').attr('content');

        $.ajax({
            url: "/g10-dashboard",
            type: 'get',
            data: {
                CSRF_TOKEN
            },
            success: function(data) {
                console.log(data)
                $("#content").html(data)
            }
        })
    }

    function getOutcomes() {
        event.preventDefault();
        const CSRF_TOKEN = $('meta[name = "crsf-token"]').attr('content');

        $.ajax({
            url: "/outcomes",
            type: 'get',
            data: {
                CSRF_TOKEN
            },
            success: function(data) {
                console.log(data)
                $("#content").html(data)
            }
        })
    }

    function getOutcomes2() {
        event.preventDefault();
        const CSRF_TOKEN = $('meta[name = "crsf-token"]').attr('content');

        $.ajax({
            url: "/outcomes2",
            type: 'get',
            data: {
                CSRF_TOKEN
            },
            success: function(data) {
                console.log(data)
                $("#content").html(data)
            }
        })
    }
</script>