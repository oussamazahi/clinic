@extends('layouts.app')

@section('content')
<div class="content ">
   
    <h1 class="backg" >Ordonnance</h1>

    <table class="table backg" style="background-color: #ffffff8c;border-radius: 10px;">
        <thead>
        <tr>
            <tr>
            <td colspan="3"></td>
            <td colspan="1">Le : {{$ord-> date_ord}} </td>
            </tr>
            <td colspan="3">nom et prenom :jivsnc,mflc;ep,vmqdf!lq k;fvld</td>
            <td colspan="1">age: 23 ans </td>
            </tr>
            <tr>
            <th scope="col" colspan="4">Ordonnance</th>
            </tr>
            
        </thead>
        <tbody>
            <tr>
            <th scope="col"colspan="2" > nom medicament</th>
            <th scope="col"colspan="2" >posologie</th>
            </tr>
            @for($i=0;$i< 3;$i++)
            <tr>
            <td colspan="2" >Mark</td>
            <td colspan="2" >Otto</td>
            </tr>
            @endfor
        </tbody>
    </table>
        
</div>
@endsection