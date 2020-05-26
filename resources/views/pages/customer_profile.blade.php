@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
           {{-- {{ dd($domains) }} --}}
            <h2>{{ $customer->customer_name }}</h2>
           <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Gegevens</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Downloads</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contracten</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                
                <div class="p-4">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <th>Bedrijf</th>
                                    <td>{{ $customer->customer_name }}</td>
                                </tr>
                                <tr>
                                    <th>Contactpersoon</th>
                                <td>{{ $customer->contact_person }}</td>
                                </tr>
                                <tr>
                                    <th>Telefoonnummer</th>
                                    <td>{{ $customer->phone_number }}</td>
                                </tr>
                                <tr>
                                    <th>Mobiel telefoonnummer</th>
                                    <td>{{ $customer->phone_number }}</td>
                                </tr>
                                <tr>
                                    <th>Emailadres</th>
                                    <td>{{ $customer->mailadres }}</td>
                                </tr>
                                <tr>
                                    <th>Websites</th>
                                    <td>@foreach ($domains as $domain)
                                            {{ $domain->domain . ', ' }}
                                        @endforeach
                                </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <th class="w-50">
                                        Klant beschrijving
                                    </th>
                                    <td>
                                        {{ $customer->description }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                </div>

            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                <div class="p-4">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <th class="w-50">
                                        Huisstijlboek
                                    </th>
                                    <td>
                                        <i class="fas fa-download"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="w-50">
                                        Logo's
                                    </th>
                                    <td>
                                        <i class="fas fa-download"></i> <i class="fas fa-download"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="w-50">
                                        Huisstijlboek
                                    </th>
                                    <td>
                                        <i class="fas fa-download"></i>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-striped table-bordered">
                               
                            </table>
                        </div>
                    </div>
                    
                </div>

            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                <div class="p-4">
                    <div class="row">
                        
                            @foreach ($domains as $domain)
                            <div class="col-md-6">
                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <th class="w-50">
                                            Domein
                                        </th>
                                        <td>
                                            {{ $domain->domain }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="w-50">
                                            SEO Contract
                                        </th>
                                        <td>
                                            {{ $domain->seo_contract_name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="w-50">
                                            Social Contract
                                        </th>
                                        <td>
                                            {{ $domain->social_contract_name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="w-50">
                                            Service & onderhoud
                                        </th>
                                        <td>
                                            @if ($domain->service_onderhoud)
                                                Ja
                                            @else
                                                Nee
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="w-50">
                                            SSL
                                        </th>
                                        <td>
                                            @if ($domain->ssl)
                                                Ja
                                            @else
                                                Nee
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            @endforeach
                            
                        
                        <div class="col-md-6">
                            <table class="table table-striped table-bordered">
                                {{-- <tr>
                                    <th class="w-50">
                                    </th>
                                    <td>
                                        
                                    </td>
                                </tr> --}}
                            </table>
                        </div>
                    </div>

            </div>
          </div>
        
        
        </div>
    </div>
</div>


@endsection

