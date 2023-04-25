<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GRADE OPTIONS </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
          

            <div class="card">
            <img class="img-fluid" src="assets/auth/images/grade10.jpg" height="230" >

            <h4 class="grade-names">Grade 10</h4>
            </div>

            <div class="card">
            <img class="img-fluid" src="assets/auth/images/grade11.jpg" height="230" style="--color:#4ECDC4" >

            <h4 class="grade-names">Grade 11</h4>
            </div>

            <div class="card">
            <img class="img-fluid" src="assets/auth/images/grade12.jpg" height="230" style="--color:#FF6B6B" >


            <h4 class="grade-names">Grade 12</h4>
            </div>
            
        <script src="" async defer></script>


    </body>

</html>

<style>
   
.grade-names{
    margin-left: 5rem;
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
  background: #e8e9ba;
  display: grid;
  gap: 40px;
  height: 100vh;
  margin: 0;
  grid-auto-flow: column;
  place-content: center;
}
</style>