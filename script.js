var app = angular.module("myapp", [], function ($compileProvider) {
  $compileProvider.aHrefSanitizationWhitelist(/^\s*(https?|ftp|mailto|chrome-extension|app):/);
  $compileProvider.imgSrcSanitizationWhitelist(/^\s*(https?|ftp|mailto|chrome-extension|app):|data:image\//);
});

app.directive('googleplace', function () {
  return {
    link: function (scope, element, attrs) {
      var options = {
        types: [],
        componentRestrictions: { country: 'in' }
      };
      scope.gPlace = new google.maps.places.Autocomplete(element[0], options);
      element.blur(function (e) {
        window.setTimeout(function () {
          angular.element(element).trigger('input');
        }, 0);
      });
    }
  }
});

app.controller('appcontroller', function ($scope, $http) {

  $scope.add = function () {
    var i = 0;
    i = +1;
  }

  $scope.remove = function () {
    var i = -1;
  }

  $scope.gPlace;

  $scope.formModel = {};

  $scope.phonenumber = /^\+?\d{2}[- ]?\d{3}[- ]?\d{5}$/;

  $scope.onSubmit = function () {

    if(!$scope.formModel.Ambulance){
      $scope.formModel.Ambulance="0";
    }
    if(!$scope.formModel.police){
      $scope.formModel.police="0";
    }
    if(!$scope.formModel.fire){
      $scope.formModel.fire="0";
    }

    
// console.log($scope.formModel.Ambulance);
// console.log($scope.formModel.police);
// console.log($scope.formModel.fire);

    var request = $http({
      method: "post",
      url: "submit.php",
      data: {
        status: $scope.formModel.emergency,
        name: $scope.formModel.name,
        phone: $scope.formModel.phone,
        address: $scope.chosenplace,
        landmark: $scope.formModel.landmark,
        pincode: $scope.formModel.pincode,
        ambulance: $scope.formModel.Ambulance,
        police: $scope.formModel.police,
        fire: $scope.formModel.fire,
        wtime: new Date(),
      },

      headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    });
    location.reload();
    $window.location.reload();
  }


  $http.get("select.php").then(function (response) {
    $scope.content = response.data;
    console.log(response.data);
  });

  // $scope.cancel = function () {
  //   $scope.phone
  //   $http.get("delete.php?subject=" + subject)
  //     .success(function (data) {
  //       $scope.users.splice(that.$index, 1)
  //     })
  // }

  $scope.cancel = function (contents) {
    $http.post('delete.php', { "phone": contents.phone }).success(function (data) {
      if (data == true) {
        getInfo();
      }
    });
     location.reload();
    $window.location.reload();
  }
});


