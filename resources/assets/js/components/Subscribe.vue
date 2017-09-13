<template>
    <div>
        <button @click="subscribeModal" class="uk-button uk-button-primary">{{ subscribe.cta }}</button>
        <div id="subscribeModal" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <h2 class="uk-modal-title">Subscribe now</h2>
                <button class="uk-modal-close-default" type="button" uk-close></button>
                   <!--  <form method="POST" action="/site/subscribe" @submit.prevent='onSubscribe'>
                        <input class="uk-input" name="name" type="text">
                        <input class="uk-input" name="email" type="text">
                        <input class="uk-input" name="channel" type="text">
                        <button type="submit">Done</button>
                    </form> -->

                <form class="uk-form-stacked" @submit.prevent='onSubscribe'>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Full name</label>
                        <div class="uk-form-controls">
                            <input name="name" v-model="subscribe.name" class="uk-input" id="form-stacked-text" type="text" placeholder="First and last name">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-select">Email address</label>
                        <div class="uk-form-controls">
                            <input name="email" v-model="subscribe.email" class="uk-input" id="form-stacked-text" type="text" placeholder="example@provider.com">
                          
                        </div>
                    </div>
                    <input type="hidden" name="channel" v-model="subscribe.channel">
                    <br>
                    <button type="submit" class="uk-button uk-button-primary">{{subscribe.cta }}</button> &nbsp;&nbsp;
                    <button class="uk-button uk-modal-close uk-button-default">Cancel</button>


                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                subscribe: {
                    name:'',
                    email:'',
                    channel:'site',
                    cta: 'Subscribe',
                    state: false
                }
            }
            
        },
        mounted() {
            
            console.log(localStorage.getItem('subscribe'));
            if(!localStorage.getItem('subscribe')) {
                localStorage.setItem('subscribe', false);
            }
        },
        methods: {
            subscribeModal: function() {
                if(!this.$data.subscribe.state && localStorage.getItem('subscribe') == 'false') {
                    UIkit.modal('#subscribeModal').show();
                } else {
                    UIkit.notification({
                        message: 'Looks like you have already subscribed',
                        status: 'danger',
                        pos: 'top-center',
                        timeout: 3000
                    });
                }
            },
            onSubscribe: function() {
                let self = this;
                axios.post('/site/subscribe', this.$data.subscribe)
                .then(function (response) {
                    // console.log(response);
                    localStorage.setItem('subscribe', true);
                    UIkit.modal('#subscribeModal').hide();
                    self.$data.subscribe.state = true;
                    UIkit.notification({
                        message: 'Thank you for subscribing!',
                        status: 'success',
                        pos: 'top-center',
                        timeout: 5000
                    });
                })
                .catch(function (error) {
                    console.log(error);
                    UIkit.notification({
                        message: 'Sorry something went wrong, please try later',
                        status: 'danger',
                        pos: 'top-center',
                        timeout: 5000
                    });
                });
            }
        }
    }
</script>
