@extends('layouts.apps')


@section('content')
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>PHPJabbers.com | Free Job Agency Website Template</title>

    <link rel="stylesheet" type="text/css" href="assets1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets1/css/font-awesome.css">

    <link rel="stylesheet" href="assets1/css/style.css">

    <style>
        #ft-form {
  font-family: inherit;
  font-size: 100%;
  line-height: 1.15
}
#ft-form *,
#ft-form ::after,
#ft-form ::before {
  box-sizing: border-box
}
#ft-form input,
#ft-form select,
#ft-form textarea {
  font-family: inherit;
  font-size: 100%;
  line-height: 1.15;
  margin: 0
}
#ft-form select {
  text-transform: none
}
#ft-form [type=submit] {
  -webkit-appearance: button
}
#ft-form legend {
  padding: 0
}
#ft-form h2,
#ft-form p {
  margin: 0
}
#ft-form fieldset {
  margin: 0;
  padding: 0
}
#ft-form html {
  font-family: ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
  line-height: 1.5
}
#ft-form body {
  font-family: inherit;
  line-height: inherit
}
#ft-form *,
#ft-form ::after,
#ft-form ::before {
  box-sizing: border-box;
  border-width: 0;
  border-style: solid;
  border-color: #e5e7eb
}
#ft-form textarea {
  resize: vertical
}
#ft-form input::-moz-placeholder,
#ft-form textarea::-moz-placeholder {
  color: #9ca3af
}
#ft-form input:-ms-input-placeholder,
#ft-form textarea:-ms-input-placeholder {
  color: #9ca3af
}
#ft-form input::placeholder,
#ft-form textarea::placeholder {
  color: #9ca3af
}
#ft-form h2 {
  font-size: inherit;
  font-weight: inherit
}
#ft-form input,
#ft-form select,
#ft-form textarea {
  padding: 0;
  line-height: inherit;
  color: inherit
}
#ft-form [type=date],
#ft-form [type=email],
#ft-form [type=tel],
#ft-form [type=text],
#ft-form select,
#ft-form textarea {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-color: #fff;
  border-color: #6b7280;
  border-width: 1px;
  border-radius: 0;
  padding-top: .5rem;
  padding-right: .75rem;
  padding-bottom: .5rem;
  padding-left: .75rem;
  font-size: 1rem;
  line-height: 1.5rem
}
#ft-form [type=date]:focus,
#ft-form [type=email]:focus,
#ft-form [type=tel]:focus,
#ft-form [type=text]:focus,
#ft-form select:focus,
#ft-form textarea:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
  box-shadow: 0 0 0 0 #fff, 0 0 0 3px rgba(199,210,254,.5), 0 0 #0000;
  border-color: #2563eb
}
#ft-form input::-moz-placeholder,
#ft-form textarea::-moz-placeholder {
  color: #6b7280;
  opacity: 1
}
#ft-form input:-ms-input-placeholder,
#ft-form textarea:-ms-input-placeholder {
  color: #6b7280;
  opacity: 1
}
#ft-form input::placeholder,
#ft-form textarea::placeholder {
  color: #6b7280;
  opacity: 1
}
#ft-form select {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
  background-position: right .5rem center;
  background-repeat: no-repeat;
  background-size: 1.5em 1.5em;
  padding-right: 2.5rem;
  -webkit-print-color-adjust: exact;
  color-adjust: exact
}
#ft-form [type=checkbox],
#ft-form [type=radio] {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  padding: 0;
  -webkit-print-color-adjust: exact;
  color-adjust: exact;
  display: inline-block;
  vertical-align: middle;
  background-origin: border-box;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  flex-shrink: 0;
  height: 1rem;
  width: 1rem;
  color: #2563eb;
  background-color: #fff;
  border-color: #6b7280;
  border-width: 1px
}
#ft-form [type=checkbox] {
  border-radius: 0
}
#ft-form [type=radio] {
  border-radius: 100%
}
#ft-form [type=checkbox]:focus,
#ft-form [type=radio]:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
  box-shadow: 0 0 0 0 #fff, 0 0 0 3px rgba(199,210,254,.5), 0 0 #0000;
}
#ft-form [type=checkbox]:checked,
#ft-form [type=radio]:checked {
  border-color: transparent;
  background-color: currentColor;
  background-size: 100% 100%;
  background-position: center;
  background-repeat: no-repeat
}
#ft-form [type=checkbox]:checked {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e")
}
#ft-form [type=radio]:checked {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e")
}
#ft-form [type=checkbox]:checked:focus,
#ft-form [type=checkbox]:checked:hover,
#ft-form [type=radio]:checked:focus,
#ft-form [type=radio]:checked:hover {
  border-color: transparent;
  background-color: currentColor
}
#ft-form [type=checkbox]:indeterminate {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e");
  border-color: transparent;
  background-color: currentColor;
  background-size: 100% 100%;
  background-position: center;
  background-repeat: no-repeat
}
#ft-form [type=checkbox]:indeterminate:focus,
#ft-form [type=checkbox]:indeterminate:hover {
  border-color: transparent;
  background-color: currentColor
}
#ft-form [type=file] {
  background: unset;
  border-color: inherit;
  border-width: 0;
  border-radius: 0;
  padding: 0;
  font-size: unset;
  line-height: inherit
}
#ft-form [type=file]:focus {
  outline: 1px auto -webkit-focus-ring-color
}
#ft-form fieldset {
  font-size: 100%;
  margin-top: 3rem;
  margin-bottom: 1.5rem
}
#ft-form fieldset:first-child {
  margin-top: 0
}
#ft-form fieldset > * {
  display: block;
  margin-bottom: 1.5rem
}
#ft-form fieldset > :last-child {
  margin-bottom: 0
}
#ft-form fieldset > .two-cols > * {
  display: block;
  margin-bottom: 1.5rem
}
#ft-form fieldset > .two-cols > :last-child {
  margin-bottom: 0
}
@media only screen and (min-width:640px) {
  #ft-form fieldset > .two-cols {
    display: flex;
    align-items: flex-end
  }
  #ft-form fieldset > .two-cols > * {
    display: block;
    margin-right: 1.5rem;
    margin-top: 0;
    margin-bottom: 0;
    flex: 1
  }
  #ft-form fieldset > .two-cols > :last-child {
    margin-right: 0
  }
}
#ft-form fieldset div > label {
  display: inline-flex;
  align-items: flex-start;
  margin-top: .5rem;
  width: 100%
}
#ft-form fieldset div > label:last-child {
  margin: .5rem 0 0 0
}
#ft-form fieldset div.inline {
  padding: .55rem 0 0;
  width: 100%
}
#ft-form fieldset div.inline > label {
  width: auto;
  margin-right: .5rem
}
#ft-form fieldset div.inline > label:last-child {
  margin-right: 0
}
#ft-form fieldset > .two-cols div.inline {
  padding: .55rem 0
}
#ft-form fieldset > legend {
  font-weight: 700;
  font-size: 120%;
  margin-bottom: 1rem
}
#ft-form fieldset > p {
  margin: 0
}
#ft-form [type=file] {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-color: #fff;
  border-color: #6b7280;
  border-width: 1px;
  border-radius: 0;
  padding-top: .5rem;
  padding-right: .75rem;
  padding-bottom: .5rem;
  padding-left: .75rem;
  font-size: 1rem;
  line-height: 1.5rem
}
#ft-form [type=file]:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
  box-shadow: 0 0 0 0 #fff, 0 0 0 3px rgba(199,210,254,.5), 0 0 #0000;
  border-color: #2563eb
}
#ft-form [multiple],
#ft-form [type=date],
#ft-form [type=datetime-local],
#ft-form [type=email],
#ft-form [type=file],
#ft-form [type=month],
#ft-form [type=number],
#ft-form [type=password],
#ft-form [type=search],
#ft-form [type=tel],
#ft-form [type=text],
#ft-form [type=time],
#ft-form [type=url],
#ft-form [type=week],
#ft-form select,
#ft-form textarea {
  border-radius: .375rem;
  margin-top: .25rem;
  box-shadow: 0 0 #0000,0 0 #0000,0 1px 2px 0 rgba(0,0,0,.05);
  border-color: #bbb;
  width: 100%
}
#ft-form [multiple] select,
#ft-form [type=date] select,
#ft-form [type=datetime-local] select,
#ft-form [type=email] select,
#ft-form [type=file] select,
#ft-form [type=month] select,
#ft-form [type=number] select,
#ft-form [type=password] select,
#ft-form [type=search] select,
#ft-form [type=tel] select,
#ft-form [type=text] select,
#ft-form [type=time] select,
#ft-form [type=url] select,
#ft-form [type=week] select,
#ft-form select select,
#ft-form textarea select {
  padding-right: 2.5rem
}
#ft-form [multiple]:focus,
#ft-form [type=date]:focus,
#ft-form [type=datetime-local]:focus,
#ft-form [type=email]:focus,
#ft-form [type=file]:focus,
#ft-form [type=month]:focus,
#ft-form [type=number]:focus,
#ft-form [type=password]:focus,
#ft-form [type=search]:focus,
#ft-form [type=tel]:focus,
#ft-form [type=text]:focus,
#ft-form [type=time]:focus,
#ft-form [type=url]:focus,
#ft-form [type=week]:focus,
#ft-form select:focus,
#ft-form textarea:focus {
  border-color: #bbb;
  box-shadow: 0 0 0 0 #fff,0 0 0 3px rgba(199,210,254,.5),0 0 #0000
}
#ft-form [type=checkbox],
#ft-form [type=radio] {
  color: #4f46e5;
  box-shadow: none;
  border-radius: .25rem;
  border-color: #bbb;
  margin-right: .5rem
}
#ft-form [type=checkbox]:focus,
#ft-form [type=radio]:focus {
  border-color: #bbb;
  box-shadow: 0 0 0 0 #fff,0 0 0 3px rgba(199,210,254,.5),0 0 #0000
}
#ft-form [type=radio] {
  border-radius: 100%
}
#ft-form .btns {
  text-align: right;
  margin-top: 3rem
}
#ft-form .btns > input[type=button],
#ft-form .btns > input[type=reset],
#ft-form .btns > input[type=submit] {
  display: inline-block;
  box-shadow: 0 0 #0000,0 0 #0000,0 1px 2px 0 rgba(0,0,0,.05);
  padding-left: 1.5rem;
  padding-right: 1.5rem;
  padding-top: .6rem;
  padding-bottom: .6rem;
  line-height: 1.25rem;
  border-width: 1px;
  border-radius: .375rem;
  border-color: #bbb;
  background-color: #fff;
  cursor: pointer;
  margin-left: .5rem;
  font-weight: 700
}
#ft-form .btns > input[type=button]:focus,
#ft-form .btns > input[type=reset]:focus,
#ft-form .btns > input[type=submit]:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
  border-color: #bbb;
  box-shadow: 0 0 0 2px #fff,0 0 0 4px rgba(199,210,254,.5),0 0 #0000
}
#ft-form .btns > input[type=submit] {
  background-color: #f3f4f5;
  transition: background-color .1s
}
#ft-form .btns > input[type=submit]:hover {
  background-color: #f8f9fa
}
    </style>

    </head>



<div class="main-banner" id="top">
    <video autoplay muted loop id="bg-video" >
        <source src="assets1/images/video.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="caption">
            <br>
            <form action="{{url('misecand/' .$candidature->id)}}" id="ft-form" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                @csrf
                <!--<fieldset>
                  <legend>Job</legend>
                  <label>
                    Application for *
                    <select name="Application for" required>
                      <option>Job A</option>
                      <option>Job B</option>
                    </select>
                  </label>
                </fieldset> -->
                <fieldset>
                    <br><br>
                  <h5 class="btn btn-primary">postuler pour:  {{ $travaille->intitule}} </h5>
                  <div class="two-cols">
                    <h6>
                      nom *
                      <input type="text" value="{{ $candidature->nom}}" style=" background-color: #d1d1d1; color:#000000" name="nom" required>
                    </h6>
                    <h6>
                      prenom *
                      <input type="text" value="{{ $candidature->prenom}}" style=" background-color: #d1d1d1; color:#000000" name="prenom" required>
                    </h6>
                  </div>
                  <div class="two-cols">
                    <h6>
                      Date de naissance *
                      <input type="date" value="{{ $candidature->date_de_naissanse}}" style=" background-color: #d1d1d1; color:#000000" name="date" required>
                    </h6>
                    <h6>
                      diplome-formation (fichier pdf)
                      <input type="file" style=" background-color: #d1d1d1; color: #000000" name="diplome" accept=".pdf">
                    </h6>
                  </div>
                  <div class="two-cols">
                  <h6>
                    Adresse *
                    <input type="text" value="{{ $candidature->adresse}}" style=" background-color: #d1d1d1; color:#000000" name="adresse" required>
                  </h6>
                  <h6>
                    wilaya *
                  <select name="wilaya" style="background-color: #d1d1d1; color:#000000" required>
                    <option value="{{ $candidature->nom_wilaya}}">{{$candidature->nom_wilaya}} </option>
                    @foreach ($wilaya as $item)
                    @if ($item->nom!=$candidature->nom_wilaya)
                    <option value="{{ $item->nom}}">{{$item->nom}}</option>
                    @endif
                    @endforeach
                  </select>
                </h6>
                  </div>
                  <!--<div class="two-cols">
                    <h6>
                      ZIP Code
                      <input type="text" style=" background-color: #d1d1d1;" name="ZIP">
                    </h6>
                    <h6>
                      City
                      <input type="text" style=" background-color: #d1d1d1;" name="City">
                    </h6>
                  </div> -->
                  <div class="two-cols">
                    <h6>
                      numéro de telephone *
                      <input type="tel" value="{{ $candidature->numero_de_telephone}}" style=" background-color: #d1d1d1; color:#000000" name="phone" required>
                    </h6>
                    <h6>
                      Adresse email
                      <input type="email" value="{{ $candidature->adresse_email}}" style=" background-color: #d1d1d1;  color:#000000" name="Email" >
                    </h6>
                  </div>
                  <div class="two-cols">
                    <h6>
                        genre
                        <select name="genre" style="background-color: #d1d1d1; color:#000000" required>
                          <option value="{{ $candidature->genre}}">{{$candidature->genre}}</option>
                          @if ($candidature->genre=="homme")

                          <option value="femme">femme</option>
                          @endif
                          @if ($candidature->genre=="femme")

                          <option value="homme">homme</option>
                          @endif
                        </select>
                      </h6>
                        <input type="hidden" value="{{ $travaille->intitule}}" name="intitule" required>
                        <input type="hidden" value="{{ $travaille->id}}" name="trvid" required>
                        <input type="hidden" value="{{ Auth::user()->id}}" name="user_id" required>
                        <input type="hidden" value="{{ Auth::user()->name}}" name="user_name" required>
                    <h6>
                      votre cv(avec une photo de vous) (fichier pdf)
                      <!-- <p>Possible file types: DOC, PDF. Maximum file size: 10 MB.</p> -->
                      <input type="file" style=" background-color: #d1d1d1; color: #000000" name="Curriculum-vital" accept=".pdf" >
                    </h6>
                    </div>
                    <div> <a  href="{{ url('vcand') }}" class="btn btn-primary col-md-4 " style="float: left ; color:white">retour</a>
                        <button type="submit"  class="btn btn-primary col-md-4 " style="float: right">modifier</button>
                    </div>
                </fieldset>

              </form>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>
                    Copyright © 2020 Company Name
                    - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
                </p>
            </div>
        </div>
    </div>
</footer>
@endsection


