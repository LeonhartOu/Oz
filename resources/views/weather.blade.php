@extends('layouts.app')

@section('content')
    <form action="{{ route('weather.index') }}" method="GET" class="mb-4">
        <div class="col-sm-12">

            <div class="form-group row">
                <div class="col-sm-3 xs-mb-15">
                    <label for="city">Pilih Kota:</label>
                    <input type="text" name="city" id="city" class="form-control mt-2"
                        value="{{ old('city', $city) }}" placeholder="Example: Jakarta, London, Tokyo">
                </div>

                <div class="col-sm-2 xs-mb-15">
                    <label for="submit">&nbsp;</label>
                    <button type="submit" class="btn btn-space btn-primary form-control input-sm mt-2">Generate</button>
                </div>
            </div>

        </div>
    </form>

    @if (isset($error))
        <p class="text-danger">Error: {{ $error }}</p>
    @elseif(isset($weatherData))
    
        {{-- <div class="container py-4">
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title mb-1">{{ $weatherData['name'] }}, {{ $weatherData['sys']['country'] }}
                            </h4>
                            <h1 class="display-4 fw-bold">{{ $weatherData['main']['temp'] }} °C</h1>
                            <p class="lead mb-0">
                                {{ ucfirst($weatherData['weather'][0]['description']) }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-left shadow-sm">
                        <div class="card-body">
                            <ul>
                                <li><strong>Humidity:</strong> {{ $weatherData['main']['humidity'] }} %</li>
                                <li><strong>Pressure:</strong> {{ $weatherData['main']['pressure'] }} hPa</li>
                                <li><strong>Wind Speed:</strong> {{ $weatherData['wind']['speed'] }} m/s</li>
                                <li><strong>Wind Direction:</strong> {{ $weatherData['wind']['deg'] }}°</li>
                                <li><strong>Sunrise:</strong>
                                    {{ \Carbon\Carbon::createFromTimestamp($weatherData['sys']['sunrise'])->format('H:i') }}
                                    WIB
                                </li>
                                <li><strong>Sunset:</strong>
                                    {{ \Carbon\Carbon::createFromTimestamp($weatherData['sys']['sunset'])->format('H:i') }}
                                    WIB
                                </li>
                                <li><strong>Coordinate:</strong>
                                    (Lat: {{ $weatherData['coord']['lat'] }}, Lon: {{ $weatherData['coord']['lon'] }})
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <h1>Weather Detail - {{ $weatherData['name'] }}, {{ $weatherData['sys']['country'] }}</h1>

        <ul>
            <li><strong>Temperature:</strong> {{ $weatherData['main']['temp'] }} °C</li>
            <li><strong>Feels Like:</strong> {{ $weatherData['main']['feels_like'] }} °C</li>
            <li><strong>Min Temperature:</strong> {{ $weatherData['main']['temp_min'] }} °C</li>
            <li><strong>Max Temperature:</strong> {{ $weatherData['main']['temp_max'] }} °C</li>
            <li><strong>Humidity:</strong> {{ $weatherData['main']['humidity'] }} %</li>
            <li><strong>Pressure:</strong> {{ $weatherData['main']['pressure'] }} hPa</li>
            <li><strong>Wind Speed:</strong> {{ $weatherData['wind']['speed'] }} m/s</li>
            <li><strong>Wind Direction:</strong> {{ $weatherData['wind']['deg'] }}°</li>
            <li><strong>Clouds:</strong> {{ $weatherData['clouds']['all'] }} %</li>
            <li><strong>Weather:</strong> {{ $weatherData['weather'][0]['main'] }}
                ({{ $weatherData['weather'][0]['description'] }})</li>
            <li><strong>Visibility:</strong> {{ $weatherData['visibility'] }} m</li>
            <li><strong>Sunrise:</strong>
                {{ \Carbon\Carbon::createFromTimestamp($weatherData['sys']['sunrise'])->format('H:i') }} WIB
            </li>
            <li><strong>Sunset:</strong>
                {{ \Carbon\Carbon::createFromTimestamp($weatherData['sys']['sunset'])->format('H:i') }} WIB
            </li>
            <li><strong>Coordinate:</strong>
                (Lat: {{ $weatherData['coord']['lat'] }}, Lon: {{ $weatherData['coord']['lon'] }})
            </li>
        </ul>
    @endif
@endsection

@section('scripts')
@endsection
