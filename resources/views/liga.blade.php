@extends('master')

@section('title','liga')

<style>
    @import url('https://fonts.googleapis.com/css?family=Russo+One&display=swap');
  body{
    margin: 0;
    padding: 0;
    font-family: 'Russo One', sans-serif !important;
  }
  .container
  {
    width: 550px;
    margin: 20px auto;
    margin-bottom: 80px;
  }
  .app{
    width: 560px;
    height: 300px;
    background: #f8f8f8;
    border-left: 11px solid #034693;
    border-right: 11px solid #e89e01;
    border-radius: 20px;

  }
  div.header{
    position: relative;
    width: 100%;
    height: 140px;
  }
  span.team{
    position: relative;
    width: 45%;
    height: 100%;
    display: inline-block;
    text-align: center;
  }
  span.team-left
  {
    float: left;
  }
  span.team-right{
    float: right;
  }
  span.team span.name{
    width: 70%;
    display: block;
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: 1px;
    color: rgba(0,0,0,0.8);
    padding: 5% 15% 0% 15%;

  }
  span.stats{
    position: absolute;
    width: 100%;
    height: 100%;
    display: inline-block;
    left: 0;
    font-size: 34px;
    text-align: center;
    font-weight: 1000;
    letter-spacing: 2px;
    color: black;
    line-height: 150px;
  }
  span.team img.logo{
width: 90px;
margin-top: 20px;
  }
  div.body{
    position: relative;
  }
  div.time{
    text-align: center;
  }

  .main .wrapper {
  max-width: 28rem;
  width: 100%;
  margin: 2rem auto;
  padding: 2rem 2.5rem;
  border: none;
  outline: none;
  border-radius: 0.25rem;
  color: var(--color-black);
  background: var(--color-white);
  box-shadow: var(--shadow-large);
}
.main .wrapper .form {
  width: 100%;
  height: auto;
  margin-top: 2rem;
}
.main .wrapper .form .input-control {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 1.25rem;
}
.main .wrapper .form .input-field {
  font-family: inherit;
  font-size: 1rem;
  font-weight: 400;
  line-height: inherit;
  width: 100%;
  height: auto;
  padding: 0.75rem 1.25rem;
  border: none;
  outline: none;
  border-radius: 2rem;
  color: var(--color-black);
  background: var(--color-light);
  text-transform: unset;
  text-rendering: optimizeLegibility;
}
.main .wrapper .form .input-submit {
  font-family: inherit;
  font-size: 1rem;
  font-weight: 500;
  line-height: inherit;
  cursor: pointer;
  min-width: 40%;
  height: auto;
  padding: 0.65rem 1.25rem;
  border: none;
  outline: none;
  border-radius: 2rem;
  color: var(--color-white);
  background: var(--color-blue);
  box-shadow: var(--shadow-medium);
  text-transform: capitalize;
  text-rendering: optimizeLegibility;
}
.main .wrapper .striped {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  margin: 1rem 0;
}
.main .wrapper .striped-line {
  flex: auto;
  flex-basis: auto;
  border: none;
  outline: none;
  height: 2px;
  background: var(--color-grayish);
}
.main .wrapper .striped-text {
  font-family: inherit;
  font-size: 1rem;
  font-weight: 500;
  line-height: inherit;
  color: var(--color-black);
  margin: 0 1rem;
}
.main .wrapper .method-control {
  margin-bottom: 1rem;
}
.main .wrapper .method-action {
  font-family: inherit;
  font-size: 0.95rem;
  font-weight: 500;
  line-height: inherit;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: auto;
  padding: 0.5rem 1.25rem;
  outline: none;
  border: 2px solid var(--color-grayish);
  border-radius: 2rem;
  color: var(--color-black);
  background: var(--color-white);
  text-transform: capitalize;
  text-rendering: optimizeLegibility;
  transition: all 0.35s ease;
}
.main .wrapper .method-action:hover {
  background: var(--color-light);
}


</style>

@section('content')
    <p style="margin-left: 40vw; font-size: 18px; margin-top: 20px;">Dodaj novu utakmicu</p>

    <form style="margin-left: 40vw;" name="login" class="form" action="/add-utakmica" method="post">
                {{ csrf_field() }}
                    <div class="input-control">
                        <input style="margin: 5px 0px; padding: 5px 10px;" type="text" name="domacin" placeholder="domacin">
                    </div>
                    <div class="input-control">
                        <input  style="margin: 5px 0px; padding: 5px 10px;" type="text" name="domacin_url" placeholder="domacin_url">
                    </div>

                    <div class="input-control">
                    <input style="margin: 3px 0px; padding: 5px 10px;" type="text"  name="gost" placeholder="gost">
                    </div>

                    <div class="input-control">
                    <input style="margin: 3px 0px; padding: 5px 10px;" type="text" name="gost_url" placeholder="gost_url">
                    </div>
                    <div class="input-control">
                    <input style="margin: 3px 0px; padding: 5px 10px;" type="text" name="domacin_golovi" placeholder="domacin_golovi">
                    </div>
                    <div class="input-control">
                    <input style="margin: 3px 0px; padding: 5px 10px;" type="text" name="gost_golovi" placeholder="gost_golovi">
                    </div>
                    <div class="input-control">
                    <input style="margin: 3px 0px; padding: 5px 10px;" type="text" name="opis" placeholder="opis">
                    </div>
                    <div class="input-control">
                        <input style="visibility: hidden;" style="display:none;" type="text" name="liga_id" value="{{$liga->id}}">
                    </div>
                    <div class="input-control">
                    <button style="padding: 5px 10px; cursor: pointer; background-color: #0275d8; border-radius: 5px;" type="submit">Save</button>
                    </div>
                </form>
    <h1  style="margin-left: 40vw;">Utakmice</h1>

        <div class="container">

        <div class="app">
        @foreach($liga->utakmice as $utakmica)
          <div class="header">
            <span class="team team-left">
              <a href="{{$liga->id}}/{{$utakmica->id}}"><img src="{{$utakmica->domacin_url}}" alt="" class="logo"></a>
              <span class="name">{{$utakmica->domacin}}</span>
            </span>
             <a href="{{$liga->id}}/{{$utakmica->id}}"><span class="stats">{{$utakmica->domacin_golovi}}-{{$utakmica->gost_golovi}}</span></a>
            <span class="team team-right">
              <img src="{{$utakmica->gost_url}}" alt="" class="logo">
              <span class="name">{{$utakmica->gost}}</span>
            </span>
            <a style="visibility: hidden;" href="{{$liga->id}}/{{$utakmica->id}}">Procitaj vise..</a>
            @endforeach

          </div>

          </div>
        </div>


@endsection
