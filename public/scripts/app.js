/*
 * create angular app and inject ngAnimate dan ui.router
 */
angular.module('formApp', ['ngAnimate', 'ui.router'])

/*
 * configuring route
 */
 .config(function($stateProvider, $urlRouterProvider){
     $stateProvider

         // route to show our basic form(/form)
         .state('create', {
             url: '/create',
             templateUrl: '../views/form.html',
             controller: 'formController'
         })

         /*
          * nested states
          * each of these sections will have their own view
          * url will be nested (form/meeting)
          */
          .state('create.meeting', {
              url: '/meeting',
              templateUrl: '../views/form-meeting.html'
          })

          // url will be /form/result
          .state('create.result', {
              url: '/result',
              templateUrl: '../views/form-result.html'
          })

          // url will be /form/note
          .state('create.note', {
              url: '/note',
              templateUrl: '../views/form-note.html'
          });

     // catch all route
     // send users to the form page
     $urlRouterProvider.otherwise('create/meeting');
 })

 // controller for the form
 .controller('formController', function($scope){
    // store all of our form data in this object
    $scope.formData = {} ;

    // function to process the form
    $scope.processForm = function() {
        alert('awesome!');
    };
 });
