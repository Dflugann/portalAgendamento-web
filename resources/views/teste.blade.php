@extends('layout.system')

@section('titulo', 'Adicionar Usuario')

@section('corpo')
    <div class="container">
        <h3 class="center">Teste</h3>
        <form class="formValidate" id="formValidate" method="get" action="" novalidate="novalidate">
            <div class="row">
                <div class="input-field col s12">
                    <label for="uname">Username*</label>
                    <input id="uname" name="uname" type="text" data-error=".errorTxt1">
                    <div class="errorTxt1"></div>
                </div>
                <div class="input-field col s12">
                    <label for="cemail">E-Mail *</label>
                    <input id="cemail" type="email" name="cemail" data-error=".errorTxt2">
                    <div class="errorTxt2"></div>
                </div>
                <div class="input-field col s12">
                    <label for="password">Password *</label>
                    <input id="password" type="password" name="password" data-error=".errorTxt3">
                    <div class="errorTxt3"></div>
                </div>
                <div class="input-field col s12">
                    <label for="cpassword">Confirm Password *</label>
                    <input id="cpassword" type="password" name="cpassword" data-error=".errorTxt4">
                    <div class="errorTxt4"></div>
                </div>
                <div class="input-field col s12">
                    <label for="curl">URL *</label>
                    <input id="curl" type="url" name="curl" data-error=".errorTxt5">
                    <div class="errorTxt5"></div>
                </div>
                <div class="col s12">
                    <label for="crole">Role *</label>
                    <select class="error browser-default" id="crole" name="crole" data-error=".errorTxt6">
                        <option value="" disabled="" selected="">Choose your profile</option>
                        <option value="1">Manager</option>
                        <option value="2">Developer</option>
                        <option value="3">Business</option>
                    </select>
                    <div class="input-field">
                        <div class="errorTxt6"></div>
                    </div>
                </div>
                <div class="input-field col s12">
                    <textarea id="ccomment" name="ccomment" class="materialize-textarea validate" data-error=".errorTxt7"></textarea>
                    <label for="ccomment">Your comment *</label>
                    <div class="errorTxt7"></div>
                </div>
                <div class="col s12">
                    <label for="genter_select">Gender *</label>
                    <p>
                        <input name="cgender" type="radio" id="gender_male" data-error=".errorTxt8">
                        <label for="gender_male">Male</label>
                    </p>
                    <p>
                        <input name="cgender" type="radio" id="gender_female" value="f">
                        <label for="gender_female">Female</label>
                    </p>
                    <div class="input-field">
                        <div class="errorTxt8"></div>
                    </div>
                </div>
                <div class="col s12">
                    <label for="tnc_select">T&amp;C *</label>
                    <p>
                        <input type="checkbox" class="checkbox" id="cagree" name="cagree" data-error=".errorTxt9">
                        <label for="cagree">Please agree to our policy</label>
                    </p>
                    <div class="input-field">
                        <div class="errorTxt6"></div>
                    </div>
                </div>
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light right submit" type="submit" name="action">Submit
                        <i class="mdi-content-send right"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script>
        $("#formValidate").validate({
            rules: {
                uname: {
                    required: true,
                    minlength: 5
                },
                cemail: {
                    required: true,
                    email:true
                },
                password: {
                    required: true,
                    minlength: 5
                },
                cpassword: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                curl: {
                    required: true,
                    url:true
                },
                crole:"required",
                ccomment: {
                    required: true,
                    minlength: 15
                },
                cgender:"required",
                cagree:"required",
            },
            //For custom messages
            messages: {
                uname:{
                    required: "Enter a username",
                    minlength: "Enter at least 5 characters"
                },
                curl: "Enter your website",
            },
            errorElement : 'div',
            errorPlacement: function(error, element) {
                var placement = $(element).data('error');
                if (placement) {
                    $(placement).append(error)
                } else {
                    error.insertAfter(element);
                }
            }
        });

    </script>

@endsection