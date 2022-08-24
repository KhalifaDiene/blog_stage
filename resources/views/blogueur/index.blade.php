@extends('layouts.admin.app')

@section('title')
    Accueil
@endsection

@section('content')
<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a>
            </li>
            <li class="active-bre"><a href="#"> Dashboard</a>
            </li>
            <li class="page-back"><a href="index-2.html"><i class="fa fa-backward" aria-hidden="true"></i> Retour</a>
            </li>
        </ul>
    </div>
    <!--== DASHBOARD INFO ==-->
    <div class="sb2-2-1">
        <h2>Admin Dashboard</h2>
        <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
        <div class="db-2">
            <ul>
                <li>
                    <div class="dash-book dash-b-1">
                        <h5>Categories</h5>
                        <h4>948</h4>
                        <a href="#">Voir...</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-2">
                        <h5>Commentaires</h5>
                        <h4>672</h4>
                        <a href="#">Voir...</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-3">
                        <h5>Blogs</h5>
                        <h4>689</h4>
                        <a href="#">Voir...</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-4">
                        <h5>Articles</h5>
                        <h4>24</h4>
                        <a href="#">Voir...</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Categories</h4>
                        <p>All about courses, program structure, fees, best course lists (ranking), syllabus, teaching techniques and other details.</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Nom</th>
                                        <th>Identifiant</th>
                                        <th>Nombre</th>
                                        <th>Disponible le</th>
                                        <th>Status</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span>
                                        </td>
                                        <td><a href="admin-student-details.html"><span class="list-enq-name">Aerospace Engineering</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <!--<td>Engineering</td>
                                        <td>60 Days(420hrs)</td>
                                        <td>03 Jun 2018</td>
                                        <td>12 Aug 2018</td>
                                        <td>74</td>-->
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-5.jpg" alt=""></span>
                                        </td>
                                        <td><a href="admin-student-details.html"><span class="list-enq-name">Fashion Technology</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <!--<td>Fashion</td>
                                        <td>30 Days(420hrs)</td>
                                        <td>01 Nov 2018</td>
                                        <td>01 Dec 2018</td>
                                        <td>30</td>-->
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-2.jpg" alt=""></span>
                                        </td>
                                        <td><a href="admin-student-details.html"><span class="list-enq-name">Agriculture Courses</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <!--<td>Agriculture</td>
                                        <td>25 Days(420hrs)</td>
                                        <td>05 Jan 2018</td>
                                        <td>25 Jan 2018</td>
                                        <td>25</td>-->
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-3.jpg" alt=""></span>
                                        </td>
                                        <td><a href="admin-student-details.html"><span class="list-enq-name">Marine Engineering</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <!--<td>Ocean / Marine</td>
                                        <td>06 Months</td>
                                        <td>12 Feb 2018</td>
                                        <td>14 Aug 2018</td>
                                        <td>68</td>-->
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-4.jpg" alt=""></span>
                                        </td>
                                        <td><a href="admin-student-details.html"><span class="list-enq-name">Building, Construction Management</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <!--<td>Construction</td>
                                        <td>1 Year</td>
                                        <td>05 Mar 2018</td>
                                        <td>16 Mar 2018</td>
                                        <td>72</td>-->
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span>
                                        </td>
                                        <td><a href="admin-student-details.html"><span class="list-enq-name">Aerospace Engineering</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <!--<td>Engineering</td>
                                        <td>60 Days(420hrs)</td>
                                        <td>03 Jun 2018</td>
                                        <td>12 Aug 2018</td>
                                        <td>74</td>-->
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-5.jpg" alt=""></span>
                                        </td>
                                        <td><a href="admin-student-details.html"><span class="list-enq-name">Fashion Technology</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <!--<td>Fashion</td>
                                        <td>30 Days(420hrs)</td>
                                        <td>01 Nov 2018</td>
                                        <td>01 Dec 2018</td>
                                        <td>30</td>-->
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-2.jpg" alt=""></span>
                                        </td>
                                        <td><a href="admin-student-details.html"><span class="list-enq-name">Agriculture Courses</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <!--<td>Agriculture</td>
                                        <td>25 Days(420hrs)</td>
                                        <td>05 Jan 2018</td>
                                        <td>25 Jan 2018</td>
                                        <td>25</td>-->
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-3.jpg" alt=""></span>
                                        </td>
                                        <td><a href="admin-student-details.html"><span class="list-enq-name">Marine Engineering</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <!--<td>Ocean / Marine</td>
                                        <td>06 Months</td>
                                        <td>12 Feb 2018</td>
                                        <td>14 Aug 2018</td>
                                        <td>68</td>-->
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/course/sm-4.jpg" alt=""></span>
                                        </td>
                                        <td><a href="admin-student-details.html"><span class="list-enq-name">Building, Construction Management</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <!--<td>Construction</td>
                                        <td>1 Year</td>
                                        <td>05 Mar 2018</td>
                                        <td>16 Mar 2018</td>
                                        <td>72</td>-->
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
