<div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-left">
                    Applications
                </h1>
                <div class="pull-xs-right">
                    <a class="btn btn-primary" href="{{route('applications.add')}}" role="button">
                        New Application +
                    </a>
                </div>

                <div class="clearfix">
                </div>
                <br>
                
                <!-- ================ Applications==================== -->
                <!-- application -->
                @foreach($applications as $application)
                <div class="col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-block">
                            <a href="{{route('notes'}}">
                                <h4 class="card-application">
                                    {{notebook->firstname}}
                                    {{notebook->lasttname}}
                                    {{notebook->farmlocation}}
                                    {{notebook->phonenumber}}
                                    {{notebook->momonumber}}
                                    {{notebook->loanamount}}
                                </h4>
                            </a>
                        </div>       
                @endforeach
                    
                