<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Grade Options | eLearners Portal</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <section>
          <body>
            <a href="/login"> <button  class="btn btn-primary fade pl-4">
                 Logout
            </button> </a>
            
            <h3 class="choice">Choose what Grade to view</h3>
            
        <section class="main">
        <!-- <div class="card">
            
            <h4 class="grade-names">Choose what Grade to view</h4>
            </div> -->

        <div class="card">
           <a href="/grade10">
           <img class="img-fluid" src="assets/auth/images/grade10.jpg" height="230" >

            <h4 class="grade-names">Grade 10</h4>
           </a>
            </div>

            <div class="card">
            <img class="img-fluid" src="assets/auth/images/grade11.jpg" height="230" style="--color:#4ECDC4" >

            <h4 class="grade-names">Grade 11</h4>
            </div>

            <div class="card">
            <img class="img-fluid" src="assets/auth/images/grade12.jpg" height="230" style="--color:#FF6B6B" >


            <h4 class="grade-names">Grade 12</h4>
            </div>
        </section>
            
            
    </body>

    </section>

</html>

<style>
   
.grade-names{
    margin-left: 5rem;
}

.choice{
    margin-left: 2.8rem;  
}

.fade {
  background-color: beige;
  box-shadow: 3px 3px 7px 2px rgba(0,0,0,.8);
  font-family:'Times New Roman', Times, serif;
  font-weight: 700;
  font-size: medium;
  width: 12%;
  height: 10%;
  border-radius: 0 15px 0 15px;
  color: black;
  transition: background-color 1s;
  margin-left: 2.8rem;
}

.fade:hover {
  background-color: #004363;
  color: beige;
}

.fade:focus,
.fade:active {
  background-color: black;
  transition: none;
}
   
a{
    text-decoration: none;
    color: black;
}

a:hover{
    text-decoration: none;
    color: black;
}


.main {
    
    width: 100%;
    padding-left: 35px;
    display: flex;
}

img {
  --color: #8A9B0F; /* the border color */
  --border: 10px;   /* the border thickness*/
  --offset: 20px;   /* control the offset*/
  --gap: 5px;       /* the gap on hover */
  
  --_c: var(--color) var(--border), #0000 0 calc(100% - var(--border)),var(--color) 0;
  --_o: calc(3*var(--offset));
  padding: 
    calc(var(--gap) + var(--border))
    calc(var(--gap) + var(--border) + var(--offset))
    calc(var(--gap) + var(--border) + var(--offset))
    calc(var(--gap) + var(--border));
  background: 
    linear-gradient(      var(--_c)) var(--_o) var(--_o), 
    linear-gradient(90deg,var(--_c)) var(--_o) var(--_o);
  background-size: calc(100% - var(--_o)) calc(100% - var(--_o));
  background-repeat: no-repeat;
  filter: grayscale(.4);
  transition: .3s;
  cursor: pointer;
}




img:hover {
  background-position: 0px 0px;
  background-size: calc(100% - var(--offset)) calc(100% - var(--offset));
  filter: grayscale(0);
}

/* .card:hover {
  background-position: 0px 0px;
  background-size: calc(100% - var(--offset)) calc(100% - var(--offset));
  filter: grayscale(0);
} */

body {
  background:beige;
  display: grid;
  gap: 40px;
  height: 100vh;
  margin: 0;
  grid-auto-flow: column;
  place-content: center;
}
</style>