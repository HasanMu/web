                    <div class="wrapper wrapper--w680">
                        <div class="card card-1">
                            <div class="card-body">
                               <h2 class="title">Silahkan Masuk</h2>
                                <form method="POST">
                                    @csrf
                                    <div class="input-group">
                                       <input id="email" class="input--style-1" type="text" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="input-group">
                                       <input class="input--style-1{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="Kata sandi" name="pass" required>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                     <!-- <a href="#" style="color: #4286f4; text-decoration: none; padding-top: 50px;"><br>Lupa kata sandi?</a> -->
                                    <div class="p-t-20">
                                        <button class="btn btn--radius btn--green" type="submit">Submit</button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>