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

    function getIndicesOutcomes1() {
        event.preventDefault();
        const CSRF_TOKEN = $('meta[name = "crsf-token"]').attr('content');

        $.ajax({
            url: "/outcomes1",
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

    function getIndicesOutcomes2() {
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

    function getIndicesOutcomes3() {
        event.preventDefault();
        const CSRF_TOKEN = $('meta[name = "crsf-token"]').attr('content');

        $.ajax({
            url: "/outcomes3",
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

    function getIndicesOutcomes4() {
        event.preventDefault();
        const CSRF_TOKEN = $('meta[name = "crsf-token"]').attr('content');

        $.ajax({
            url: "/outcomes4",
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

    function getAlgebraOutcomes1() {
        event.preventDefault();
        const CSRF_TOKEN = $('meta[name = "crsf-token"]').attr('content');

        $.ajax({
            url: "/algebraOutcomes1",
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

    function getAlgebraOutcomes2() {
        event.preventDefault();
        const CSRF_TOKEN = $('meta[name = "crsf-token"]').attr('content');

        $.ajax({
            url: "/algebraOutcomes2",
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

    function getAlgebraOutcomes3() {
        event.preventDefault();
        const CSRF_TOKEN = $('meta[name = "crsf-token"]').attr('content');

        $.ajax({
            url: "/algebraOutcomes3",
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

    function getMatrixOutcomes1() {
        event.preventDefault();
        const CSRF_TOKEN = $('meta[name = "crsf-token"]').attr('content');

        $.ajax({
            url: "/matrixOutcomes1",
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