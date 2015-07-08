@extends('app')
@section('content')
    <div class="page-title-style01 page-title-negative-top pt-bkg13" style="margin-top: 116px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>About</h1>

                    <div class="breadcrumb-container">
                        <ul class="breadcrumb clearfix">
                            <li>You are here:</li>

                            <li>
                                <a href="/{{Lang::getLocale()}}/">Home</a>
                            </li>

                            <li>
                                <a href="/{{Lang::getLocale()}}/about">About</a>
                            </li>
                        </ul><!-- .breadcrumb end -->
                    </div><!-- .breadcrumb-container end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <!-- .aside.aside-left end -->

                <div class="col-md-12">
                    <!-- .nivo-wrapper end -->

                    <br><br>

                    <div class="custom-heading">
                        <h2>our history</h2>
                    </div>

                    <p>
                        Lorem ipsum dolor sit amet, at pro esse legere scripta. Ex facilisi sensibus eam. An feugait adversarium mea, no mea summo deterruisset. Ex vocibus appetere inciderint eum. Nibh nonumy facilisi eos eu, in pri enim vero propriae. Nam cu inermis mediocrem scriptorem.
                    </p>

                    <br>

                    <ul class="company-timeline clearfix">
                        <li>
                            <div class="icon-date-container">
                                <i class="fa fa-calendar"></i>
                            </div><!-- .icon-date-container end -->

                            <div class="timeline-item-details">
                                <h3>2008</h3>

                                <p>
                                    Lorem ipsum dolor sit amet, at pro esse legere scripta. Ex facilisi sensibus eam. An feugait adversarium mea, no mea summo deterruisset. Ex vocibus appetere inciderint eum. Nibh nonumy facilisi eos eu, in pri enim vero propriae. Nam cu inermis mediocrem scriptorem.
                                </p>
                            </div><!-- .timeline-item-details end -->
                        </li><!-- history item end -->

                        <li>
                            <div class="icon-date-container">
                                <i class="fa fa-calendar"></i>
                            </div><!-- .icon-date-container end -->

                            <div class="timeline-item-details">
                                <h3>2010</h3>

                                <p>
                                    Lorem ipsum dolor sit amet, at pro esse legere scripta. Ex facilisi sensibus eam. An feugait adversarium mea, no mea summo deterruisset. Ex vocibus appetere inciderint eum. Nibh nonumy facilisi eos eu, in pri enim vero propriae. Nam cu inermis mediocrem scriptorem.
                                </p>
                            </div><!-- .timeline-item-details end -->
                        </li><!-- history item end -->

                        <li>
                            <div class="icon-date-container">
                                <i class="fa fa-calendar"></i>
                            </div><!-- .icon-date-container end -->

                            <div class="timeline-item-details">
                                <h3>2014 Expanding our network</h3>

                                <p>
                                    Lorem ipsum dolor sit amet, at pro esse legere scripta. Ex facilisi sensibus eam. An feugait adversarium mea, no mea summo deterruisset. Ex vocibus appetere inciderint eum. Nibh nonumy facilisi eos eu, in pri enim vero propriae. Nam cu inermis mediocrem scriptorem.
                                </p>

                                <ul class="fa-ul clearfix">
                                    <li>
                                        <i class="fa fa-li fa-long-arrow-right"></i>
                                        Lorem ipsum dolor sit amet, at pro esse legere scripta. Ex facilisi sensibus eam. An feugait adversarium mea, no mea summo deterruisset.
                                    </li>

                                    <li>
                                        <i class="fa fa-li fa-long-arrow-right"></i>
                                        Lorem ipsum dolor sit amet, at pro esse legere scripta. Ex facilisi sensibus eam. An feugait adversarium mea, no mea summo deterruisset.
                                    </li>

                                    <li>
                                        <i class="fa fa-li fa-long-arrow-right"></i>
                                        Lorem ipsum dolor sit amet, at pro esse legere scripta. Ex facilisi sensibus eam. An feugait adversarium mea, no mea summo deterruisset.
                                    </li>
                                </ul><!-- .fa-ul end -->
                            </div><!-- .timeline-item-details end -->
                        </li><!-- history item end -->
                    </ul><!-- .company-timeline end -->
                </div><!-- .col-md-9 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div>

@endsection