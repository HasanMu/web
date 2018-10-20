                    <div class="wrapper wrapper--w680">
                        <div class="card card-1">
                            <div class="card-body">
                               <h2 class="title">Daftar sekarang juga!</h2>
                                <form method="POST">
                                  
                                    <div class="input-group">
                                       <input class="input--style-1" type="text" placeholder="Nama Lengkap" name="name">
                                    </div>
                                    <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <input class="input--style-1 js-datepicker" type="text" placeholder="Tanggal Lahir" name="birthday">
                                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="cntr" style="padding-top: 10px;">
                                            <label for="rdo-1" class="btn-radio">
                                              <input type="radio" id="rdo-1" name="radio-grp">
                                              <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <circle cx="10" cy="10" r="9"></circle>
                                                <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
                                                <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
                                              </svg>
                                              <span>Laki - Laki</span>
                                            </label>
                                            <label for="rdo-2" class="btn-radio">
                                              <input type="radio" id="rdo-2" name="radio-grp">
                                              <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <circle cx="10" cy="10" r="9"></circle>
                                                <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
                                                <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
                                              </svg>
                                              <span>Perempuan</span>
                                            </label>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="input-group">
                                       <input class="input--style-1{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" placeholder="Email" name="email">
                                    </div>
                                    <div class="input-group">
                                       <input class="input--style-1{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="Kata sandi" name="password">

                                    </div>
                                    <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <input class="input--style-1" type="text" placeholder="No Hp" name="nohp">
                                        </div>
                                    </div>
                                    </div>  
                                    <div class="p-t-20">
                                        <button class="btn btn--radius btn--green" type="submit">Submit</button>
                                    </div>
                                </form>
                                <!-- <a href="login" style="color: #4286f4; text-decoration: none; padding-top: 50px;"><br>Sudah punya akun? Masuk</a> -->
                            </div>
                        </div>
                    </div>