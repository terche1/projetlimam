@extends('layouts.app')
@section( 'contenue' )
<div class="row mb=3 text-center ">
<h4>بسم الله الرحمن الرحيم</h4>
</div>
<div class="row ">
<div class="col ">
    <h6>La République islamique de Mauritanie</h6>
    <h6>Honneur - Fraternité - Justice</h6>
    <h6>Ministère de la Justice</h6>
    <h6><strong>Bureau de Limam </strong></h6>
    <h6>Ahmed Hamed Hemeydi</h6>
   
</div>

    <div class="col text-end">
        <h6>الجمهورية الإسلامية الموريتانية </h6>
        <h6>شرف-إخاء-عدل</h6>
        <h6>وزارة العدل</h6>
        <h6> <strong> مكتب الإمام </strong> </h6>
        <h6>محمد حامد حميدي </h6>
       

    </div>


</div>

<div class="row mb=3 text-center ">
<H6> <strong> {{$vente->id}}:بيعة رقم </strong></h6>
</div>
<div class="row text-end ">
<p><h4>{{$vente->created_at}}:في يوم  </h4> </p>
<p><h6>.حضر(ت)أمامنا نحن الإمام محمد حامد حميدي(2)بنواكشوط. بموجب مذكرة وزير العدل رقم 2024/000030
 </h6> </p>
 <p> <h6>      ({{$vente->NNIendeur }} ): الوطني الرقم  {{$vente->ChoseVendu}}   :باع(ت) {{$vente->NomVendeur}}:السيد(ة)</h6> <h6>{{$vente->NNIAcheteur }}   :  الرقم الوطني{{$vente->NomAcheteur }} :لسيد(ة)</h6> </p>
 
 <p><h6 >المبلغ: {{$vente->Prix}} أوقية</h6></p>   
 <p><h4 > <u>:الشهود</u> </h4></p>   
 <div class="col "></div>
 <div class="col "></div>
 <div class="col ">
 <table class="table table-striped table-hover" >
 <tr><th> {{$vente->NomTemoin1}}</th>  <th> {{$vente->NNITemoin1}}</th> </tr>
 <tr><th> {{$vente->NomTemoin2}}</th>  <th> {{$vente->NNIemoin2}}</th> </tr>
</table>
</div>

</div>
<div class="row mb=3 text-center ">
<p><h4 >  وعليه تم تضمين ملخص هذه البيعة بسجل الأصول بمكتبنا بعد قراءته وتوقيعه من طرف المصرح</h4></p> 

</div>


</div>
</div>
@endsection

<script>
       
        window.onload = function () {
            window.print();
        }
    </script>

