<template>
    <section id="wrapper">
        <GuestHeader></GuestHeader>
        <div class="login-register" style="background-image:url(/images/background/music24.jpg);">
            <div class="login-box card">
            <div class="card-body">
                <h3 class="box-title m-b-20 text-center">Reset Password</h3>
                <div v-if="!showMessage">
                    <form class="form-horizontal form-material" id="resetform" @submit.prevent="submit">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input type="text" name="email" class="form-control" placeholder="Email" v-model="resetForm.email"> </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input type="password" name="password" class="form-control" placeholder="Password" v-model="resetForm.password"> </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input type="password" name="password" class="form-control" placeholder="Password" v-model="resetForm.password_confirmation"> </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset Password</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div v-else class="text-center">
                    <h4 v-text="message" class="alert alert-success" v-if="status"></h4>
                    <h4 v-text="message" class="alert alert-danger" v-else></h4>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                    <p>Back to Login? <router-link to="/login" class="text-info m-l-5"><b>Sign In</b></router-link></p>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <GuestFooter></GuestFooter>
    </section>
</template>

<script>
    import GuestHeader from '../../layouts/guest-header.vue'
    import GuestFooter from '../../layouts/guest-footer.vue'
    export default {
        data() {
            return {
                resetForm: {
                    email: '',
                    password: '',
                    password_confirmation: '',
                    token:this.$route.params.token,
                },
                message: '',
                status: true,
                showMessage: false
            }
        },
        components: {
           GuestFooter,
            GuestHeader
        },
        mounted(){
            axios.post('/api/auth/validate-password-reset',{
                token: this.reset.token
            }).then(response => {
                this.showMessage = false;
            }).catch(error => {
                this.message = error.response.data.message;
                this.showMessage = true;
                this.status = false;
            });
        },
        methods: {
            submit(e){
                axios.post('/api/auth/reset', this.resetForm).then(response =>  {
                    this.message = response.data.message;
                    this.showMessage = true;
                    this.status = true;
                }).catch(error => {
                    toastr['error'](error.response.data.message);
                });
            }
        }
    }
</script>
