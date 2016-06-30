@extends('layouts.app')

@section('content')
<div ng-controller="ChatController">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <i class="fa fa-users"></i> R &amp; D :: Pusher for Chat
                    </div>

                    <div class="panel-body" style="max-height: 70vh;">
                        <div id="out" style="overflow-y: scroll;">
                            <blockquote ng-repeat="message in messages" class="small">
                                <p><strong>@{{ message.name }} |</strong> @{{ message.message }}</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <form class="form-horizontal" name="someform" ng-submit="addNewMessage()" novalidate>
                        <div class="form-group has-success">
                            <input type="text" ng-model="message" class="form-control" placeholder="Write Your Message & Then Press Enter ..." style="width: 100%; padding: 20px;" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
