 @extends('scripts.scripts')
 
 
 <!-- User details -->
 <div id="outcomes" class="user-profile text-center mt-3">
     <div class="">
         <a href="/" class="auth-logo">
             <img src="assets/auth/images/coa.png" height="100" class="logo-dark mx-auto" alt="">
             <img src="assets/auth/images/coa.png" height="100" class="logo-light mx-auto" alt="">
         </a>
     </div>
     <!-- @if( auth()->check() )
     <li class="nav-item">
         <a class="nav-link" href="#">{{ auth()->user()->name }}</a>
     </li>
     @endif -->
 </div>

 <!--- Sidemenu -->
 <div id="sidebar-menu">
     <!-- Left Menu Start -->
     <ul class="metismenu list-unstyled" id="side-menu">
         <li class="menu-title">Menu</li>

         <li>
             <a <a href="#" onclick="g10Dashboard()" class="waves-effect">
                 <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">Home</span>
                 <span>Dashboard</span>
             </a>
         </li>



         <li>
             <a href="javascript: void(0);" class="has-arrow waves-effect">
                 <i class="ri-layout-3-line"></i>
                 <span>Subjects</span>
             </a>
             <ul class="sub-menu" aria-expanded="true">
                 <li>
                     <a href="#" onclick="viewEnglishOverview()" class="has-arrow"><i class="ri ri-book-line"></i>English Language</a>
                     <ul class="sub-menu" aria-expanded="true" label="Topics">

                         <li><a href="javascript: void(0);" class="has-arrow">Topic</a>
                             <ul class="sub-menu" aria-expanded="true">
                                 <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                 <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                 <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                 <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                 <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                             </ul>

                         </li>

                         <li><a href="javascript: void(0);" class="has-arrow">Topic</a>
                             <ul class="sub-menu" aria-expanded="true">
                                 <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                 <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                 <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                 <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                 <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                             </ul>

                         </li>
                         <li><a href="javascript: void(0);" class="has-arrow">Topic</a>
                             <ul class="sub-menu" aria-expanded="true">
                                 <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                 <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                 <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                 <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                 <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                             </ul>

                         </li>
                         <li><a href="javascript: void(0);" class="has-arrow">Topic</a>
                             <ul class="sub-menu" aria-expanded="true">
                                 <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                 <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                 <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                 <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                 <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                             </ul>

                         </li>


                         <li><a href="javascript: void(0);" class="has-arrow">Topic</a>

                             <ul class="sub-menu" aria-expanded="true">
                                 <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                 <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                 <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                 <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                 <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                             </ul>

                         </li>

                         <li><a href="javascript: void(0);" class="has-arrow">Topic</a>

                             <ul class="sub-menu" aria-expanded="true">
                                 <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                 <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                 <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                 <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                 <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                             </ul>

                         </li>

                         <li>
                             <a href="/videos" class=" waves-effect">
                                 <i class="ri-book-3-fill"></i>
                                 <span>Text Book</span>
                             </a>
                         </li>
                     </ul>


                 </li>





                 <ul class="sub-menu" aria-expanded="true">
                     <li>
                         <a href="#" onclick="viewMathOverview()" class="has-arrow"><i class="ri ri-compasses-2-line"></i>Mathematics</a>
                         <ul class="sub-menu" aria-expanded="true" label="Topics">

                             <li><a href="javascript: void(0);" class="has-arrow"><i class="ri ri-pushpin-fill"></i>Sets</a>
                                 <ul class="sub-menu" aria-expanded="true">
                                     <li><a href="layouts-compact-sidebar.html"><i class="ri ri-pushpin-2-line"></i>Set Operations</a></li>
                                     <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                     <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                     <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                     <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                                 </ul>

                             </li>

                             <li><a href="javascript: void(0);" class="has-arrow"><i class="ri ri-pushpin-fill"></i>Index Notation</a>
                                 <ul class="sub-menu" aria-expanded="true">
                                     <li><a href="javascript: void(0);" class="has-arrow"><i class="ri ri-pushpin-2-line"></i>Indices</a>
                                         <ul class="sub-menu" aria-expanded="true">
                                             <li><a href="javascript: void(0);" class="has-arrow"><i class="ri ri-star-half-s-line"></i>Outcomes</a>
                                                 <ul class="sub-menu" aria-expanded="true" label="Outcomes">

                                                     <li><a href="#" onclick="getIndicesOutcomes1()"><i class="ri ri-arrow-drop-right-fill"></i>Apply Higher Operations on Sets</a></li>
                                                     <li><a href="#" onclick="getIndicesOutcomes2()"><i class="ri ri-arrow-drop-right-fill"></i>Simplify Positive, Negative</a></li>
                                                     <li><a href="#" onclick="getIndicesOutcomes3()"><i class="ri ri-arrow-drop-right-fill"></i>Simplify Fractional Indices</a></li>
                                                     <li><a href="#" onclick="getIndicesOutcomes4()"><i class="ri ri-arrow-drop-right-fill"></i>Solve Equations involving Indices</a></li>

                                                 </ul>
                                             </li>
                                         </ul>
                                     </li>
                                     
                                 </ul>

                             </li>
                             <li><a href="javascript: void(0);" class="has-arrow"><i class="ri ri-pushpin-fill"></i>Algebra</a>
                             <ul class="sub-menu" aria-expanded="true">
                                     <li><a href="javascript: void(0);" class="has-arrow"><i class="ri ri-pushpin-2-line"></i>Basic Processes</a>
                                         <ul class="sub-menu" aria-expanded="true">
                                             <li><a href="javascript: void(0);" class="has-arrow"><i class="ri ri-star-half-s-line"></i>Outcomes</a>
                                                 <ul class="sub-menu" aria-expanded="true" label="Outcomes">

                                                     <li><a href="#" onclick="getAlgebraOutcomes1()"><i class="ri ri-arrow-drop-right-fill"></i>Expand & Simplify Expressions</a></li>
                                                     <li><a href="#" onclick="getAlgebraOutcomes2()"><i class="ri ri-arrow-drop-right-fill"></i>Factorize Algebraic Expressions</a></li>
                                                     <li><a href="#" onclick="getAlgebraOutcomes3()"><i class="ri ri-arrow-drop-right-fill"></i>Simplify Algebraic Expressions</a></li>


                                                 </ul>
                                             </li>
                                         </ul>
                                     </li>
                                     
                                 </ul>


                             </li>
                            
                                 <li><a href="javascript: void(0);" class="has-arrow"><i class="ri ri-pushpin-fill"></i>Matrices</a>
                                 <ul class="sub-menu" aria-expanded="true">
                                     <li><a href="javascript: void(0);" class="text-sm has-arrow"><i class="ri ri-pushpin-2-line"></i>Transpose a Matrix</a>
                                         <ul class="sub-menu" aria-expanded="true">
                                             <li><a href="javascript: void(0);" class="has-arrow"><i class="ri ri-star-half-s-line"></i>Outcomes</a>
                                                 <ul class="sub-menu" aria-expanded="true" label="Outcomes">

                                                     <li><a href="#" onclick="getMatrixOutcomes1()"><i class="ri ri-arrow-drop-right-fill"></i>Find a Transpose of a Matrix</a></li>


                                                 </ul>
                                             </li>
                                         </ul>
                                     </li>

                                     <li><a href="javascript: void(0);" class="text-sm has-arrow"><i class="ri ri-pushpin-2-line"></i>Multiplication of Matrices</a>
                                         <ul class="sub-menu" aria-expanded="true">
                                             <li><a href="javascript: void(0);" class="has-arrow"><i class="ri ri-star-half-s-line"></i>Outcomes</a>
                                                 <ul class="sub-menu" aria-expanded="true" label="Outcomes">

                                                     <li><a href="#" onclick="getMultMatrixOutcomes1()"><i class="ri ri-arrow-drop-right-fill"></i>Multiply matrices(up to 3 X 3 Matrix)</a></li>


                                                 </ul>
                                             </li>
                                         </ul>
                                     </li>

                                     <li><a href="javascript: void(0);" class="text-sm has-arrow"><i class="ri ri-pushpin-2-line"></i>Inverse of a Matrix</a>
                                         <ul class="sub-menu" aria-expanded="true">
                                             <li><a href="javascript: void(0);" class="has-arrow"><i class="ri ri-star-half-s-line"></i>Outcomes</a>
                                                 <ul class="sub-menu" aria-expanded="true" label="Outcomes">

                                                     <li><a href="#" onclick="getInverseMatrixOutcomes1()"><i class="ri ri-arrow-drop-right-fill"></i>Calculate the determinant of a 2 by 2 matrix</a></li>
                                                     <li><a href="#" onclick="getInverseMatrixOutcomes2()"><i class="ri ri-arrow-drop-right-fill"></i>Find the inverse of a 2 by 2 matrix</a></li>
                                                     <li><a href="#" onclick="getInverseMatrixOutcomes3()"><i class="ri ri-arrow-drop-right-fill"></i>Solve systems of equations in two variables</a></li>


                                                 </ul>
                                             </li>
                                         </ul>
                                     </li>
                                     
        
                                
                                 </ul>

                             </li>


                             <li><a href="javascript: void(0);" class="has-arrow"><i class="ri ri-pushpin-fill"></i>Similarity & Congruency</a>

                             <ul class="sub-menu" aria-expanded="true">
                                     <li><a href="javascript: void(0);" class="text-sm has-arrow"><i class="ri ri-pushpin-2-line"></i>Application of Ratio & Proportion</a>
                                         <ul class="sub-menu" aria-expanded="true">
                                             <li><a href="javascript: void(0);" class="has-arrow"><i class="ri ri-star-half-s-line"></i>Outcomes</a>
                                                 <ul class="sub-menu" aria-expanded="true" label="Outcomes">

                                                     <li><a href="#" onclick="getARPOutcomes1()"><i class="ri ri-arrow-drop-right-fill"></i>Calculate the scale of a map</a></li>


                                                 </ul>
                                             </li>
                                         </ul>
                                     </li>

                                     <li><a href="javascript: void(0);" class="text-sm has-arrow"><i class="ri ri-pushpin-2-line"></i>Areas & Volumes of Similar Figures</a>
                                         <ul class="sub-menu" aria-expanded="true">
                                             <li><a href="javascript: void(0);" class="has-arrow"><i class="ri ri-star-half-s-line"></i>Outcomes</a>
                                                 <ul class="sub-menu" aria-expanded="true" label="Outcomes">

                                                     <li><a href="#" onclick="getAVSFOutcomes1()"><i class="ri ri-arrow-drop-right-fill"></i>Calculate length & area using a given scale & vice versa</a></li>
                                                     <li><a href="#" onclick="getAVSFOutcomes2()"><i class="ri ri-arrow-drop-right-fill"></i>Calculate areas & volumes of similar figures</a></li>
                                                     <li><a href="#" onclick="getAVSFOutcomes3()"><i class="ri ri-arrow-drop-right-fill"></i>Apply ratio & proportion to solve problemson similarity & congruence</a></li>
                                                 </ul>
                                             </li>
                                         </ul>
                                     </li>
                                     
        
                                     <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                     <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                     <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                     <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                                 </ul>

                             </li>

                             <li><a href="javascript: void(0);" class="has-arrow"><i class="ri ri-pushpin-fill"></i>Travel Graphs</a>

                                 <ul class="sub-menu" aria-expanded="true">
                                     <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                     <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                     <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                     <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                     <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                                 </ul>

                             </li>

                             <li><a href="javascript: void(0);" class="has-arrow"><i class="ri ri-pushpin-fill"></i>Social & Commercial Arithmetic</a>

                                 <ul class="sub-menu" aria-expanded="true">
                                     <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                     <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                     <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                     <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                     <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                                 </ul>

                             </li>

                             <li><a href="javascript: void(0);" class="has-arrow"><i class="ri ri-pushpin-fill"></i>Bearings</a>
                                 <ul class="sub-menu" aria-expanded="true">
                                     <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                     <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                     <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                     <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                     <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                                 </ul>

                             </li>
                             <li><a href="javascript: void(0);" class="has-arrow"><i class="ri ri-pushpin-fill"></i>Symmetry</a>
                                 <ul class="sub-menu" aria-expanded="true">
                                     <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                     <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                     <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                     <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                     <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                                 </ul>

                             </li>
                             <li><a href="javascript: void(0);" class="has-arrow"><i class="ri ri-pushpin-fill"></i>Computer & Calculator</a>
                                 <ul class="sub-menu" aria-expanded="true">
                                     <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                     <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                     <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                     <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                     <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                                 </ul>

                             </li>


                         </ul>
                     </li>
                 </ul>
         </li>




         <ul class="sub-menu" aria-expanded="true">


             <ul class="sub-menu" aria-expanded="true">
                 <li>
                     <a href="#" onclick="viewChemistryOverview()" class="has-arrow"><i class="ri ri-temp-cold-line"></i>Chemistry</a>
                     <ul class="sub-menu" aria-expanded="true" label="Topics">

                         <li><a href="javascript: void(0);" class="has-arrow">Topic</a>
                             <ul class="sub-menu" aria-expanded="true">
                                 <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                 <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                 <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                 <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                 <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                             </ul>

                         </li>

                         <li><a href="javascript: void(0);" class="has-arrow">Topic</a>
                             <ul class="sub-menu" aria-expanded="true">
                                 <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                 <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                 <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                 <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                 <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                             </ul>

                         </li>
                         <li><a href="javascript: void(0);" class="has-arrow">Topic</a>
                             <ul class="sub-menu" aria-expanded="true">
                                 <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                 <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                 <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                 <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                 <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                             </ul>

                         </li>
                         <li><a href="javascript: void(0);" class="has-arrow">Topic</a>
                             <ul class="sub-menu" aria-expanded="true">
                                 <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                 <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                 <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                 <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                 <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                             </ul>

                         </li>


                         <li><a href="javascript: void(0);" class="has-arrow">Topic</a>

                             <ul class="sub-menu" aria-expanded="true">
                                 <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                 <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                 <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                 <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                 <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                             </ul>

                         </li>

                         <li><a href="javascript: void(0);" class="has-arrow">Topic</a>

                             <ul class="sub-menu" aria-expanded="true">
                                 <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                 <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                 <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                 <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                 <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                             </ul>

                         </li>
                     </ul>
                 </li>

             </ul>


             <ul class="sub-menu" aria-expanded="true">


<ul class="sub-menu" aria-expanded="true">
    <li>
        <a href="javascript: void(0);" class="has-arrow"><i class="ri ri-bug-fill"></i>Biology</a>
        <ul class="sub-menu" aria-expanded="true" label="Topics">

            <li><a href="javascript: void(0);" class="has-arrow">Topic</a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                    <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                    <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                    <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                    <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                </ul>

            </li>

            <li><a href="javascript: void(0);" class="has-arrow">Topic</a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                    <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                    <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                    <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                    <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                </ul>

            </li>
            <li><a href="javascript: void(0);" class="has-arrow">Topic</a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                    <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                    <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                    <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                    <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                </ul>

            </li>
            <li><a href="javascript: void(0);" class="has-arrow">Topic</a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                    <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                    <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                    <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                    <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                </ul>

            </li>


            <li><a href="javascript: void(0);" class="has-arrow">Topic</a>

                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                    <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                    <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                    <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                    <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                </ul>

            </li>

            <li><a href="javascript: void(0);" class="has-arrow">Topic</a>

                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                    <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                    <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                    <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                    <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                </ul>

            </li>
        </ul>
    </li>

</ul>

<ul class="sub-menu" aria-expanded="true">


<ul class="sub-menu" aria-expanded="true">
    <li>
        <a href="javascript: void(0);" class="has-arrow"><i class="ri  ri-compass-3-fill"></i>Physics</a>
        <ul class="sub-menu" aria-expanded="true" label="Topics">

            <li><a href="javascript: void(0);" class="has-arrow">Topic</a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                    <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                    <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                    <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                    <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                </ul>

            </li>

            <li><a href="javascript: void(0);" class="has-arrow">Topic</a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                    <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                    <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                    <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                    <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                </ul>

            </li>
            <li><a href="javascript: void(0);" class="has-arrow">Topic</a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                    <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                    <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                    <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                    <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                </ul>

            </li>
            <li><a href="javascript: void(0);" class="has-arrow">Topic</a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                    <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                    <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                    <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                    <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                </ul>

            </li>


            <li><a href="javascript: void(0);" class="has-arrow">Topic</a>

                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                    <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                    <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                    <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                    <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                </ul>

            </li>

            <li><a href="javascript: void(0);" class="has-arrow">Topic</a>

                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                    <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                    <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                    <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                    <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                </ul>

            </li>
        </ul>
    </li>

</ul>





             </ul>
 </div>
 

 