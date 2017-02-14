<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <!-- <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body"> -->
                        <div id="app">

                            <component :is="currentStep" :next-step.sync="nextStep"></component>

                            <ul>
                                <li v-for="step in steps">
                                 <span @click="currentStep = step">{{ step }}</span>
                                </li>
                            </ul>
                        </div>

                    <!-- </div>
                </div> -->
            </div>
        </div>
    </div>
</template>

<script>
    var StepOne = Vue.extend({
        props: ['nextStep'],
        template: '<div><h1>Step One</h1><button @click="nextStep(\'step-two\')">Next</button></div>'
    });

    var StepTwo = Vue.extend({
        props: ['nextStep'],
        template: '<div><h1>Step Two</h1><button @click="nextStep(\'step-three\')">Next</button></div>'
    });

    var StepThree = Vue.extend({
        template: '<div><h1>Step Three</h1><button>Finish</button></div>'
    });


    var app = new Vue({
        el: '#app',
        data: {
        steps: ['step-one', 'step-two', 'step-three'],
        completedSteps:[],
        currentStep: 'step-one'
    },

    components: {
        'step-one': StepOne,
        'step-two': StepTwo,
        'step-three': StepThree,
    },

    methods: {
        nextStep: function (step) {
          this.currentStep = step;
        }
    }
});

</script>
