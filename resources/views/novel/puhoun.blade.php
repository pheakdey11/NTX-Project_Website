@extends('headerinclude')

@section('subnovel')
        <div class="col-sm-2">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#puhoun1" role="tab" aria-controls="home">Episode 1</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#puhoun2" role="tab" aria-controls="profile">Episode 2</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#puhoun3" role="tab" aria-controls="messages">Episode 3</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#puhoun4" role="tab" aria-controls="settings">Episode 4</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#puhoun5" role="tab" aria-controls="profile">Episode 5</a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="puhoun1" role="tabpanel" aria-labelledby="list-home-list">...</div>
                <div class="tab-pane fade" id="puhoun2" role="tabpanel" aria-labelledby="list-profile-list">...</div>
                <div class="tab-pane fade" id="puhoun3" role="tabpanel" aria-labelledby="list-messages-list">...</div>
                <div class="tab-pane fade" id="puhoun4" role="tabpanel" aria-labelledby="list-settings-list">...</div>
                <div class="tab-pane fade" id="puhoun5" role="tabpanel" aria-labelledby="list-profile-list">...</div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="row">
            <div class="col-sm-6">
            <a href="#myModal" data-toggle="modal"><img src="../../img/princess.jpg" class="hver" style="height: 80%; width: 100%; margin-top: -1%;"></a>
            </div>
            <div class="col-sm-6">
            <a href="#map2" data-toggle="modal"><img src="../../img/map2.jpg" class="hver" style="height: 40%; width: 100%; margin-top: -1%;"></a>
            <a href="#map" data-toggle="modal"><img src="../../img/map.jpg" class="hver" style="height: 40%; width: 100%; margin-top: -1%;"></a>
            </div>
            </div>
            <a href="#temple" data-toggle="modal"><img src="../../img/temple.jpg" class="hver" style="height: 30%; width: 100%; margin-top: -1%;"></a>
            <a href="#world" data-toggle="modal"><img src="../../img/world.jpg" class="hver" style="height: 30%; width: 100%; margin-top: -1%;"></a>
        </div>
        <a class="scroll-top" href=""><i class='far fa-arrow-alt-circle-up' style='font-size:36px; color:grey;'></i></a>
        <!-- model -->
        <div class="modal fade bd-example-modal-lg show" id="myModal" role="dialog">
            <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body" id="dynamic-content">
                            <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <img src="../../img/princess.jpg" alt="" style="height: 100%; width: 90%;"/>
                        </div>
                    </div>
            </div>  
        </div> 
        <div class="modal fade bd-example-modal-lg show" id="map2" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content" style="width:150%; display: block; margin-left: -25%; margin-right: auto;">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <img src="../../img/map2.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
            </div>
        </div> 
        <div class="modal fade bd-example-modal-lg show" id="map" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content" style="width:150%; display: block; margin-left: -25%; margin-right: auto;">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <img src="../../img/map.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
            </div>
        </div> 
        <div class="modal fade bd-example-modal-lg show" id="temple" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content" style="width:150%; display: block; margin-left: -25%; margin-right: auto;">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <img src="../../img/temple.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
            </div> 
        </div>
        <div class="modal fade bd-example-modal-lg show" id="world" role="dialog">
            <div class="modal-dialog">
                    <div class="modal-content" style="width:150%; display: block; margin-left: -25%; margin-right: auto;">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <img src="../../img/world.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
            </div>
        </div>
@endsection