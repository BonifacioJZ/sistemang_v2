@extends('layouts.app')
@section('content')
<div class="ui segment">
    <div class="ui unstackable items">
      <div class="item">
        <div class="content">
          <a class="header">Expediente de la fecha {{$expedient->date}}  y hora  {{ $expedient->time }} </a>
          <div class="meta">
            <span>Pulso</span>
          </div>
          <div class="description">
            <p> {{  __($expedient->pulso)  }}</p>
          </div>
          <div class="meta">
            <span>Temperatura</span>
          </div>
          <div class="description">
            <p> {{  __($expedient->temperatura)  }}</p>
          </div>
          <a class="header">Presion Arterial</a>
          <div class="meta">
            <span>Pesion Diastólica</span>
          </div>
          <div class="description">
            @if( intval($expedient->presion_d)<60 )
              <div class="ui divided selection list">
                <a class="item">
                  <div class="ui red horizontal label"> {{ __($expedient->presion_d) }}</div>
                </a>
            @elseif(intval($expedient->presion_d)<59 && intval($expedient->presion_d)<81)
            <div class="ui divided selection list">
                <a class="item">
                  <div class="ui green horizontal label"> {{ __($expedient->presion_d) }}</div>
                </a>
            @elseif(intval($expedient->presion_d)>80&&intval($expedient->presion_d)>88)
            <a class="item">
                <div class="ui yellow horizontal label"> {{ __($expedient->presion_d) }} </div>
              </a>
            @elseif(intval($expedient->presion_d)>89 && intval($expedient->presion_d)>98)
            <a class="item">
                <div class="ui orange horizontal label"> {{ __($expedient->presion_d) }} </div>
              </a>
            @elseif(intval($expedient->presion_d)>99&& intval($expedient->presion_d)>110)
            <a class="item">
                <div class="ui orange horizontal label"> {{ __($expedient->presion_d) }} </div>
              </a>
            @elseif(intval($expedient->presion_d)>109)
            <a class="item">
                <div class="ui red horizontal label"> {{ __($expedient->presion_d) }} </div>
              </a>
            @endif

            </div>
          <div class="meta">
            <span>Presion Sistólica</span>
          </div>
          <div class="description">
            @if(intval($expedient->presion_s)<80)
              <a class="item">
                <div class="ui red horizontal label"> {{ __($expedient->presion_s) }} </div>
              </a>
            @elseif(intval($expedient->presion_s)>=80&&intval($expedient->presion_s)<121)
              <a class="item">
                <div class="ui green horizontal label"> {{ __($expedient->presion_s) }} </div>
              </a>
            @elseif(intval($expedient->presion_s)>=120&&intval($expedient->presion_s)<=139)
              <a class="item">
                <div class="ui yellow horizontal label"> {{ __($expedient->presion_s) }} </div>
              </a>
            @elseif(intval($expedient->presion_s)>=140&&intval($expedient->presion_s)<=159)
                <a class="item">
                    <div class="ui orange horizontal label"> {{ __($expedient->presion_s) }} </div>
                </a>
            @elseif(intval($expedient->presion_s)>=160&&intval($expedient->presion_s)<=179)
            <a class="item">
                <div class="ui orange horizontal label"> {{ __($expedient->presion_s) }} </div>
            </a>
            @elseif(intval($expedient->presion_s)>=180)
            <a class="item">
                <div class="ui red horizontal label"> {{ __($expedient->presion_s) }} </div>
            </a>
            @endif
          </div>
          <div class="meta">
            @if( intval($expedient->presion_s)<80||intval($expedient->presion_d)<60 )

            <a class="item">
                <div class="ui red horizontal label"> {{ __('Hipotensión') }} </div>
            </a>
            @elseif((intval($expedient->presion_d)<59 && intval($expedient->presion_d)<81)&&(intval($expedient->presion_s)>=80&&intval($expedient->presion_s)<121))
                <a class="item">
                    <div class="ui green horizontal label"> {{ __('Normal') }} </div>
                </a>
            @elseif((intval($expedient->presion_d)>80&&intval($expedient->presion_d)>88)||(intval($expedient->presion_s)>=120&&intval($expedient->presion_s)<=139))
            <a class="item">
                <div class="ui yellow horizontal label"> {{ __('Prehipertensión') }} </div>
            </a>
            @elseif((intval($expedient->presion_d)>89 && intval($expedient->presion_d)>98)||(intval($expedient->presion_s)>=140&&intval($expedient->presion_s)<=159))
            <a class="item">
                <div class="ui orange horizontal label"> {{ __('HTA 1') }} </div>
            </a>
            @elseif((intval($expedient->presion_d)>99&& intval($expedient->presion_d)>110)||(intval($expedient->presion_s)>=160&&intval($expedient->presion_s)<=179))
            <a class="item">
                <div class="ui orange horizontal label"> {{ __('HTA 2') }} </div>
            </a>
            @elseif((intval($expedient->presion_d)>109)||(intval($expedient->presion_s)>=180))
            <a class="item">
                <div class="ui red horizontal label"> {{ __('Emergensia Medica') }} </div>
            </a>
            @endif
          </div><br><br>

          <div class="description">
            <a class="ui fluid yellow button" href="{{ route('note.index',$expedient->id)}}">Notas</a>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
