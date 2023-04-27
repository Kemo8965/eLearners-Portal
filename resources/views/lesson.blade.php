<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<div class="col-lg-12">
<h3>Rationale</h3>
    <div class="card">
        <div class="row no-gutters align-items-center">
            
            
            <div class="col-md-6">
                <div class="card-body" id="my-data">
                    <h5 class="card-title">LESSON TITLE</h5>
                    <p>Name: {{ $data['name'] }}</p>
                    <p>Age: {{ $data['age'] }}</p>
                    <p>Email: {{ $data['email'] }}</p>


                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>

                <button class="btn btn-primary btn-small">Next<i class="px-2 ri-arrow-right-circle-fill"></i></button>
            </div>

            <div class="col-lg-6">
                <img class="card-img img-fluid" src="assets/auth/images/matrices.png" alt="Card image">
            </div>

           
        </div>
       
    </div>
</div>

<style>
    .card{
        height: 64vh;
    }

    .card-img{
        height:64vh;
    }


    .btn{
        width: 20%;
        margin-left: 2rem;

    }

</style>