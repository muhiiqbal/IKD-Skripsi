// coding hitung js
{{-- k1 --}}
// $(document).ready(function() {
    //     $('#jumlah1,#jumlah2,#nilaik1,#total,#nilai_akhirk1').keyup(function() {
    //         var jumlah1 = $('#jumlah1').val();
    //         var jumlah2 = $('#jumlah2').val();
    //         var akhir = $('#nilaik1').val();
    //         var total1  = parseInt(jumlah1)/ 14 *50;
    //         var total2  = parseInt(jumlah2)/ 14 *50;
    //         var total = parseInt(total1) + parseInt(total2);
    //         $('#total').val(total);

    //         if(total >=80  ){
    //             $('#nilaik1').val(4);}
    //         else if(total < 80  || total >= 70){
    //             $('#nilaik1').val(3);}
    //         else if(total < 70|| total >=60){
    //             $('#nilaik1').val(2);}
    //         else if(total < 60 || total >= 40){
    //             $('#nilaik1').val(1);}
    //         else if(total < 40){
    //             $('#nilaik1').val(0);}
            
            
    //         var akhir1 = parseFloat(akhir) * 0.05;
    //         $('#nilai_akhirk1').val(akhir1);
    //     });
    // });
    {{-- k7 --}}
    // $(document).ready(function() {
        //     $('#mhsk7,#mhslulusk7,#persentasek7,#nilaik7').keyup(function() {
        //         var dlk = $('#mhsk7').val();
        //         var tdk = $('#mhslulusk7').val();
        //         var totalk7 = parseInt(tdk) / parseInt(dlk) * 100;
        //         $('#persentasek7').val(totalk7);
        //         $('#nilaik7').val(totalk7);
        //         if(totalk7 >=100 ){
        //             $('#nilaik7').val(4*5/100);
    
        //         }else if(totalk7 < 89 && totalk7 >=70 ){
        //             $('#nilaik7').val(3*5/100);
    
        //         }else if(totalk7 < 69 && totalk7 >=50){
        //             $('#nilaik7').val(2*5/100);
    
        //         }else if(totalk7 < 49 && totalk7 >=30){
        //             $('#nilaik7').val(1*5/100);
    
        //         }else if(totalk7 < 30){
        //             $('#nilaik7').val(0);}
        //     });
        // });
        {{-- k8 --}}
            {{-- $(document).ready(function() {
            //     $('#penugasank8,#dilaksanakank8,#tidakdilaksanakank8,#totaljagak8,#totalk8,#nilaik8').keyup(function() {
            //         var tugas = $('#penugasank8').val();
            //         var dlk = $('#dilaksanakank8').val();
            //         var tdk = $('#tidakdilaksanakank8').val();
            //         var totaltdk = parseInt(tugas) - parseInt(dlk);
            //         var totalk8 = parseInt(dlk) / parseInt(tugas)*100;
            //         $('#tidakdilaksanakank8').val(totaltdk);
            //         $('#totaljagak8').val(dlk);
            //         $('#totalk8').val(totalk8);
            //         if(totalk8 >=100 ){
            //             $('#nilaik8').val(4*5/100);
        
            //         }else if(totalk8 <89 && totalk8 >=70 ){
            //             $('#nilaik8').val(3*5/100);
        
            //         }else if(totalk8 < 69 && totalk8 >=50){
            //             $('#nilaik8').val(2*5/100);
        
            //         }else if(totalk8 < 49 && totalk8 >=30){
            //             $('#nilaik8').val(1*5/100);
        
            //         }else if(totalk8 <30){
            //             $('#nilaik8').val(0*5/100);}
            //     });
            // }); --}}
        {{-- k-9 --}}
        $(document).ready(function() {
            //     $('#penugasank9,#jumlahlaksanak9,#persentasek9,#nilaik9').keyup(function() {
            //         var dlk = $('#penugasank9').val();
            //         var tdk = $('#jumlahlaksanak9').val();
            //         var totalk9 = (parseInt(tdk) / parseInt(dlk)) * 100 ;// 20 ->convert ke persen
            //         $('#persentasek9').val(totalk9);
            //         $('#nilaik9').val(totalk9);
            //         $('#nilaik9').val(totalk9);
            //         if(totalk9 >=100 ){
            //             $('#nilaik9').val(4*5/100);
        
            //         }else if(totalk9 <89 && totalk9 >=70 ){
            //             $('#nilaik9').val(3*5/100);
        
            //         }else if(totalk9 < 69 && totalk9 >=50){
            //             $('#nilaik9').val(2*5/100);
        
            //         }else if(totalk9 < 49 && totalk9 >=30){
            //             $('#nilaik9').val(1*5/100);
        
            //         }else if(totalk9 <30){
            //             $('#nilaik9').val(0);}
            //     });
            // });
        {{-- k-10 --}}
        $(document).ready(function() {
            $('#jumlahpenelitiank10,#nilaik10').keyup(function() {
                var dlk = $('#jumlahpenelitiank10').val();
                $('#nilaik10').val(dlk);
                if(dlk >=2 ){
                    $('#nilaik10').val(4*0.25);
    
                }else if(dlk <2 && dlk >=1 ){
                    $('#nilaik10').val(2*0.25);
    
                }else if(dlk <1){
                    $('#nilaik10').val(0);}
            });
        });
        {{-- k-11 --}}

        $(document).ready(function() {
            $('#ilmiahk11,#nilaik11').keyup(function() {
                var dlk = $('#ilmiahk11').val();
                $('#nilaik11').val(dlk);
    
                if(dlk >=2){
                    $('#nilaik11').val(4*0.15);
    
                }else if(dlk <2 && dlk >=1 ){
                    $('#nilaik11').val(2*0.15);
    
                }else if(dlk <1){
                    $('#nilaik11').val(0);}
    
            });
        });
        {{-- 14 --}}
        $(document).ready(function() {
            $('#pengurangank14,#nilaik14').keyup(function() {
                var dlk = $('#pengurangank14').val();
                $('#nilaik14').val(dlk);
                if(dlk >=2 ){
                    $('#nilaik14').val(0*0.05);
    
                }else if(dlk <2 && dlk >=0 ){
                    $('#nilaik14').val(4*0.05);}
                
            });
    {{-- K4 --}}
    // k4
    // $(document).ready(function() {
    //     $('#ajark4,#nilaik4').keyup(function() {
    //         x="Selesai"
    //         y="Tidak Selesai"
    //         var dlk = $('#ajark4').val();
    //         $('#nilaik4').val(dlk);
    //         if(dlk == x ){
    //             $('#nilaik4').val(4*0.05);
    //         }else if(dlk == y ){
    //             $('#nilaik4').val(0);
    //         }

    //     });
    // });

    {{-- k5 --}}
    $(document).ready(function() {
        $('#totalk5,#totalratak5,#nilaik5').keyup(function() {
            var dlk = $('#totalk5').val();
            var tdk = $('#totalratak5').val();
            var totalk5 = parseInt(dlk) / parseInt(tdk);
            $('#nilaik5').val(totalk5);
            if(totalk5 >=50 ){
                $('#nilaik5').val(4*0.05);

            }else if(totalk5 <50 && totalk5 >=40 ){
                $('#nilaik5').val(3*0.05);

            }else if(totalk5 <40 && totalk5 >=30){
                $('#nilaik5').val(2*0.05);

            }else if(totalk5 < 30 && totalk5 >=20){
                $('#nilaik5').val(1*0.05);

            }else if(totalk5 <20){
                $('#nilaik5').val(0);}
        });
    });

    $(document).ready(function() {
        $('#ajark6,#nilaik6').keyup(function() {
            x="Selesai"
            y="Tidak Selesai"
            var dlk = $('#ajark6').val();
            $('#nilaik6').val(dlk);
            if(dlk == x ){
                $('#nilaik6').val(4*0.05);
            }else if(dlk == y ){
                $('#nilaik6').val(0);
            }

        });
    });
    