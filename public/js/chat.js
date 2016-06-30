var app = angular.module('ChatApp', []);

app.controller('ChatController', function($scope, $http) {

    $http.get('chat').success(function(messages) {
        $scope.messages = messages;
    });

    $scope.addNewMessage = function(){
        var newMessage = {
            message : $scope.message,
        };

        $scope.message = null;
        $http.post('chat', newMessage);

        $("#out").animate({ scrollTop: $('#out')[0].scrollHeight}, 1000);
    };

    var pusher = new Pusher("f7e85bf81e9019c227e0");
    var channel = pusher.subscribe('test-channel');
    channel.bind('test-event', function(data) {
        $scope.messages.push(data);
    });

});

