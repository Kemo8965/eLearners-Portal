 @extends('scripts.scripts')
 
 
 <!-- User details -->
 <div id="outcomes" class="user-profile text-center mt-3">
     <div class="">
         <a href="/" class="auth-logo">
             <img src="assets/auth/images/coa.png" height="60" class="logo-dark mx-auto" alt="">
             <img src="assets/auth/images/coa.png" height="60" class="logo-light mx-auto" alt="">
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
                     <a href="javascript: void(0);" class="has-arrow">English Language</a>
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
                         <a href="javascript: void(0);" class="has-arrow">Mathematics</a>
                         <ul class="sub-menu" aria-expanded="true" label="Topics">

                             <li><a href="javascript: void(0);" class="has-arrow">Sets</a>
                                 <ul class="sub-menu" aria-expanded="true">
                                     <li><a href="layouts-compact-sidebar.html">Set Operations</a></li>
                                     <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                     <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                     <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                     <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                                 </ul>

                             </li>

                             <li><a href="javascript: void(0);" class="has-arrow">Index Notation</a>
                                 <ul class="sub-menu" aria-expanded="true">
                                     <li><a href="javascript: void(0);" class="has-arrow">Indices</a>
                                         <ul class="sub-menu" aria-expanded="true">
                                             <li><a href="javascript: void(0);" class="has-arrow">Outcomes</a>
                                                 <ul class="sub-menu" aria-expanded="true" label="Outcomes">

                                                     <li><a href="#" onclick="getOutcomes()">Apply Higher Operations on Sets</a></li>
                                                     <li><a href="#" onclick="getOutcomes2()">Simplify Positive, Negative</a></li>
                                                     <li><a href="layouts-preloader.html">Simplify Fractional Indices</a></li>
                                                     <li><a href="layouts-colored-sidebar.html">Solve Equations involving Indices</a></li>

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
                             <li><a href="javascript: void(0);" class="has-arrow">Algebra</a>
                                 <ul class="sub-menu" aria-expanded="true">
                                     <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                     <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                     <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                     <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                     <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                                 </ul>

                             </li>
                             <li><a href="javascript: void(0);" class="has-arrow">Matrices</a>
                                 <ul class="sub-menu" aria-expanded="true">
                                     <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                     <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                     <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                     <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                     <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                                 </ul>

                             </li>


                             <li><a href="javascript: void(0);" class="has-arrow">Similarity and Congruency</a>

                                 <ul class="sub-menu" aria-expanded="true">
                                     <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                     <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                     <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                     <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                     <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                                 </ul>

                             </li>

                             <li><a href="javascript: void(0);" class="has-arrow">Travel Graphs</a>

                                 <ul class="sub-menu" aria-expanded="true">
                                     <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                     <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                     <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                     <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                     <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                                 </ul>

                             </li>

                             <li><a href="javascript: void(0);" class="has-arrow">Social and Commercial Arithmetic</a>

                                 <ul class="sub-menu" aria-expanded="true">
                                     <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                     <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                     <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                     <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                     <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                                 </ul>

                             </li>

                             <li><a href="javascript: void(0);" class="has-arrow">Bearings</a>
                                 <ul class="sub-menu" aria-expanded="true">
                                     <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                     <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                     <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                     <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                     <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                                 </ul>

                             </li>
                             <li><a href="javascript: void(0);" class="has-arrow">Symmetry</a>
                                 <ul class="sub-menu" aria-expanded="true">
                                     <li><a href="layouts-compact-sidebar.html">Sub-topic 1</a></li>
                                     <li><a href="layouts-icon-sidebar.html">Sub-topic 2</a></li>
                                     <li><a href="layouts-boxed.html">Sub-topic 3</a></li>
                                     <li><a href="layouts-preloader.html">Sub-topic 4</a></li>
                                     <li><a href="layouts-colored-sidebar.html">Sub-topic 5</a></li>
                                 </ul>

                             </li>
                             <li><a href="javascript: void(0);" class="has-arrow">Computer and Calculator</a>
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
                     <a href="javascript: void(0);" class="has-arrow">Subject</a>
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
 </div>
 

 