@extends('layouts.app')



@section('styles')
<style type="text/css">
    #logo
    {
        transition: transform 3s;
    }
    #logo:hover 
    {
        transform: scaleY(2);
        transform-origin: top;
/*        transform: rotateX(100deg);
        transform:scale(2,2);*/
    }
</style>
@endsection


@section('content')

        <div class="jumbotron" style="margin-top: 1%;">
            <div class="container text-center">
                <h2 id="search-h1">
                    Search online and find Employers in Pakistan
                </h2>
                <form action="search" method="get" files="true">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group">
                        <input class="form-control" name="search_text" placeholder="Search Job Seekers"/>
                    </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group">
                        <select class="form-control placeholder selectbox_placeholder" name="region_name">
                            <option value="">Please Select Location</option>
                            <option value="abbottabad">Abbottabad</option>
                            <option value="adilpur">Adilpur</option>
                            <option value="ahmadpureast">Ahmadpur East</option>
                            <option value="ahmadpursial">Ahmadpur Sial</option>
                            <option value="akora">Akora</option>
                            <option value="alikghund">Alik Ghund</option>
                            <option value="alipur">Alipur</option>
                            <option value="alizai">Alizai</option>
                            <option value="amangarh">Amangarh</option>
                            <option value="amirabad">Amirabad</option>
                            <option value="arifwala">Arifwala</option>
                            <option value="asadullahkhandirvi">Asad Ullah Khan Dirvi</option>
                            <option value="attockcity">Attock City</option>
                            <option value="baddomalhi">Baddomalhi</option>
                            <option value="badin">Badin</option>
                            <option value="baffa">Baffa</option>
                            <option value="bagarji">Bagarji</option>
                            <option value="bahawalnagar">Bahawalnagar</option>
                            <option value="bahawalnagar">Bahawalnagar</option>
                            <option value="bahawalpur">Bahawalpur</option>
                            <option value="bajaur">Bajaur</option>
                            <option value="bakhriahmadkhan">Bakhri Ahmad Khan</option>
                            <option value="balakot">Balakot</option>
                            <option value="bandhi">Bandhi</option>
                            <option value="bannu">Bannu</option>
                            <option value="barishal">Barishal</option>
                            <option value="barkhan">Barkhan</option>
                            <option value="basirpur">Basirpur</option>
                            <option value="bastiaukharvand">Basti Aukharvand</option>
                            <option value="bastidosa">Basti Dosa</option>
                            <option value="bastimachi">Basti Machi</option>
                            <option value="bastiqaudhia">Basti Qaudhia</option>
                            <option value="batkhela">Bat Khela</option>
                            <option value="begowala">Begowala</option>
                            <option value="bela">Bela</option>
                            <option value="berani">Berani</option>
                            <option value="bhag">Bhag</option>
                            <option value="bhaipheru">Bhai Pheru</option>
                            <option value="bhakkar">Bhakkar</option>
                            <option value="bhalwal">Bhalwal</option>
                            <option value="bhan">Bhan</option>
                            <option value="bharakahu">Bhara Kahu</option>
                            <option value="bhawana">Bhawana</option>
                            <option value="bhera">Bhera</option>
                            <option value="bhimbar">Bhimbar</option>
                            <option value="bhiria">Bhiria</option>
                            <option value="bhitshah">Bhit Shah</option>
                            <option value="bhopalwala">Bhopalwala</option>
                            <option value="bozdar">Bozdar</option>
                            <option value="bulri">Bulri</option>
                            <option value="burewala">Burewala</option>
                            <option value="chak">Chak</option>
                            <option value="chakazamsaffo">Chak Azam Saffo</option>
                            <option value="chakwal">Chakwal</option>
                            <option value="chaman">Chaman</option>
                            <option value="chambar">Chambar</option>
                            <option value="charsadda">Charsadda</option>
                            <option value="chawinda">Chawinda</option>
                            <option value="cherat">Cherat</option>
                            <option value="chichawatni">Chichawatni</option>
                            <option value="chiniot">Chiniot</option>
                            <option value="chishtianmandi">Chishtian Mandi</option>
                            <option value="choasaidanshah">Choa Saidan Shah</option>
                            <option value="chor">Chor</option>
                            <option value="chowkijamali">Chowki Jamali</option>
                            <option value="chuharjamali">Chuhar Jamali</option>
                            <option value="chuharkana">Chuhar Kana</option>
                            <option value="chunian">Chunian</option>
                            <option value="dadhar">Dadhar</option>
                            <option value="dadu">Dadu</option>
                            <option value="dairadinpanah">Daira Din Panah</option>
                            <option value="dajal">Dajal</option>
                            <option value="dalbandin">Dalbandin</option>
                            <option value="daromehar">Daro Mehar</option>
                            <option value="daryakhan">Darya Khan</option>
                            <option value="daryakhanmarri">Darya Khan Marri</option>
                            <option value="daska">Daska</option>
                            <option value="daudkhel">Daud Khel</option>
                            <option value="daulatpur">Daulatpur</option>
                            <option value="daultala">Daultala</option>
                            <option value="daur">Daur</option>
                            <option value="derabugti">Dera Bugti</option>
                            <option value="deraghazikhan">Dera Ghazi Khan</option>
                            <option value="deraismailkhan">Dera Ismail Khan</option>
                            <option value="dhanot">Dhanot</option>
                            <option value="dhaunkal">Dhaunkal</option>
                            <option value="dhokawan">Dhok Awan</option>
                            <option value="dhoronaro">Dhoro Naro</option>
                            <option value="digri">Digri</option>
                            <option value="dijkot">Dijkot</option>
                            <option value="dinga">Dinga</option>
                            <option value="dipalpur">Dipalpur</option>
                            <option value="diplo">Diplo</option>
                            <option value="dir">Dir</option>
                            <option value="doaba">Doaba</option>
                            <option value="dokri">Dokri</option>
                            <option value="duki">Duki</option>
                            <option value="dullewala">Dullewala</option>
                            <option value="dungabunga">Dunga Bunga</option>
                            <option value="dunyapur">Dunyapur</option>
                            <option value="eminabad">Eminabad</option>
                            <option value="faisalabad">Faisalabad</option>
                            <option value="faqirwali">Faqirwali</option>
                            <option value="faruka">Faruka</option>
                            <option value="fazalpur">Fazalpur</option>
                            <option value="fortabbas">Fort Abbas</option>
                            <option value="gadani">Gadani</option>
                            <option value="gambat">Gambat</option>
                            <option value="garhmaharaja">Garh Maharaja</option>
                            <option value="garhikhairo">Garhi Khairo</option>
                            <option value="garhiyasin">Garhi Yasin</option>
                            <option value="gharo">Gharo</option>
                            <option value="ghauspur">Ghauspur</option>
                            <option value="ghotki">Ghotki</option>
                            <option value="gilgit">Gilgit</option>
                            <option value="gojra">Gojra</option>
                            <option value="gothgarelo">Goth Garelo</option>
                            <option value="gujarkhan">Gujar Khan</option>
                            <option value="gujranwala">Gujranwala</option>
                            <option value="gujrat">Gujrat</option>
                            <option value="gwadar">Gwadar</option>
                            <option value="hadali">Hadali</option>
                            <option value="hafizabad">Hafizabad</option>
                            <option value="hala">Hala</option>
                            <option value="hangu">Hangu</option>
                            <option value="haripur">Haripur</option>
                            <option value="harnai">Harnai</option>
                            <option value="harnoli">Harnoli</option>
                            <option value="haruzbad">Haru Zbad</option>
                            <option value="hasanabdal">Hasan Abdal</option>
                            <option value="hasilpur">Hasilpur</option>
                            <option value="haveli">Haveli</option>
                            <option value="havelian">Havelian</option>
                            <option value="hazro">Hazro</option>
                            <option value="hingorja">Hingorja</option>
                            <option value="hotchatsarri">Hot Chat Sarri</option>
                            <option value="hujra">Hujra</option>
                            <option value="hyderabad">Hyderabad</option>
                            <option value="islamabad">Islamabad</option>
                            <option value="islamkot">Islamkot</option>
                            <option value="jacobabad">Jacobabad</option>
                            <option value="jahanianshah">Jahanian Shah</option>
                            <option value="jalalpur">Jalalpur</option>
                            <option value="jalalpurpirwala">Jalalpur Pirwala</option>
                            <option value="jamsahib">Jam Sahib</option>
                            <option value="jampur">Jampur</option>
                            <option value="jamshoro">Jamshoro</option>
                            <option value="jand">Jand</option>
                            <option value="jandialasherkhan">Jandiala Sher Khan</option>
                            <option value="jaranwala">Jaranwala</option>
                            <option value="jath">Jath</option>
                            <option value="jati">Jati</option>
                            <option value="jatoishimali">Jatoi Shimali</option>
                            <option value="jauharabad">Jauharabad</option>
                            <option value="jhangsadr">Jhang Sadr</option>
                            <option value="jhawarian">Jhawarian</option>
                            <option value="jhelum">Jhelum</option>
                            <option value="jhol">Jhol</option>
                            <option value="jhumra">Jhumra</option>
                            <option value="jiwani">Jiwani</option>
                            <option value="johi">Johi</option>
                            <option value="kabirwala">Kabirwala</option>
                            <option value="kadhan">Kadhan</option>
                            <option value="kahna">Kahna</option>
                            <option value="kahuta">Kahuta</option>
                            <option value="kakadwaridirupper">Kakad Wari Dir Upper</option>
                            <option value="kalabagh">Kalabagh</option>
                            <option value="kalaswala">Kalaswala</option>
                            <option value="kalat">Kalat</option>
                            <option value="kalekemandi">Kaleke Mandi</option>
                            <option value="kallarkahar">Kallar Kahar</option>
                            <option value="kalurkot">Kalur Kot</option>
                            <option value="kamalia">Kamalia</option>
                            <option value="kamarmushani">Kamar Mushani</option>
                            <option value="kambar">Kambar</option>
                            <option value="kamir">Kamir</option>
                            <option value="kamoke">Kamoke</option>
                            <option value="kamokey">Kamokey</option>
                            <option value="kamra">Kamra</option>
                            <option value="kandhkot">Kandhkot</option>
                            <option value="kandiari">Kandiari</option>
                            <option value="kandiaro">Kandiaro</option>
                            <option value="kanganpur">Kanganpur</option>
                            <option value="karachi">Karachi</option>
                            <option value="karak">Karak</option>
                            <option value="karaundi">Karaundi</option>
                            <option value="kario">Kario</option>
                            <option value="karor">Karor</option>
                            <option value="kashmor">Kashmor</option>
                            <option value="kasur">Kasur</option>
                            <option value="ketibandar">Keti Bandar</option>
                            <option value="khadro">Khadro</option>
                            <option value="khairpur">Khairpur</option>
                            <option value="khairpur">Khairpur</option>
                            <option value="khairpur">Khairpur</option>
                            <option value="khairpurnathanshah">Khairpur Nathan Shah</option>
                            <option value="khalabat">Khalabat</option>
                            <option value="khangahdogran">Khangah Dogran</option>
                            <option value="khangarh">Khangarh</option>
                            <option value="khanpur">Khanpur</option>
                            <option value="khanpur">Khanpur</option>
                            <option value="kharan">Kharan</option>
                            <option value="kharian">Kharian</option>
                            <option value="khewra">Khewra</option>
                            <option value="khurrianwala">Khurrianwala</option>
                            <option value="khushab">Khushab</option>
                            <option value="kohat">Kohat</option>
                            <option value="kohlu">Kohlu</option>
                            <option value="kohrorpakka">Kohror Pakka</option>
                            <option value="kotaddu">Kot Addu</option>
                            <option value="kotdiji">Kot Diji</option>
                            <option value="kotghulammuhammad">Kot Ghulam Muhammad</option>
                            <option value="kotmumin">Kot Mumin</option>
                            <option value="kotradhakishan">Kot Radha Kishan</option>
                            <option value="kotsamaba">Kot Samaba</option>
                            <option value="kotsultan">Kot Sultan</option>
                            <option value="kotli">Kotli</option>
                            <option value="kotliloharan">Kotli Loharan</option>
                            <option value="kotri">Kotri</option>
                            <option value="kulachi">Kulachi</option>
                            <option value="kundian">Kundian</option>
                            <option value="kunjah">Kunjah</option>
                            <option value="kunri">Kunri</option>
                            <option value="lachi">Lachi</option>
                            <option value="ladhewalawaraich">Ladhewala Waraich</option>
                            <option value="lahore">Lahore</option>
                            <option value="lakhi">Lakhi</option>
                            <option value="lakkimarwat">Lakki Marwat</option>
                            <option value="lalamusa">Lala Musa</option>
                            <option value="lalian">Lalian</option>
                            <option value="landikotal">Landi Kotal</option>
                            <option value="larkana">Larkana</option>
                            <option value="lawa">Lawa</option>
                            <option value="leiah">Leiah</option>
                            <option value="liliani">Liliani</option>
                            <option value="lodhran">Lodhran</option>
                            <option value="loralai">Loralai</option>
                            <option value="mach">Mach</option>
                            <option value="madeji">Madeji</option>
                            <option value="mailsi">Mailsi</option>
                            <option value="malakwal">Malakwal</option>
                            <option value="malakwalcity">Malakwal City</option>
                            <option value="mamukanjan">Mamu Kanjan</option>
                            <option value="mananwala">Mananwala</option>
                            <option value="mandibahauddin">Mandi Bahauddin</option>
                            <option value="mangla">Mangla</option>
                            <option value="mankera">Mankera</option>
                            <option value="mansehra">Mansehra</option>
                            <option value="mardan">Mardan</option>
                            <option value="mastung">Mastung</option>
                            <option value="matiari">Matiari</option>
                            <option value="matli">Matli</option>
                            <option value="mehar">Mehar</option>
                            <option value="mehrabpur">Mehrabpur</option>
                            <option value="mianchannun">Mian Channun</option>
                            <option value="mianwali">Mianwali</option>
                            <option value="minchinabad">Minchinabad</option>
                            <option value="mingora">Mingora</option>
                            <option value="miranshah">Miran Shah</option>
                            <option value="mirokhan">Miro Khan</option>
                            <option value="mirpurbatoro">Mirpur Batoro</option>
                            <option value="mirpurkhas">Mirpur Khas</option>
                            <option value="mirpurmathelo">Mirpur Mathelo</option>
                            <option value="mirpursakro">Mirpur Sakro</option>
                            <option value="mirwahgorchani">Mirwah Gorchani</option>
                            <option value="mithatiwana">Mitha Tiwana</option>
                            <option value="mithi">Mithi</option>
                            <option value="moro">Moro</option>
                            <option value="mozashahwala">Moza Shahwala</option>
                            <option value="multan">Multan</option>
                            <option value="muridke">Muridke</option>
                            <option value="murree">Murree</option>
                            <option value="mustafabad">Mustafabad</option>
                            <option value="muzaffarabad">Muzaffarabad</option>
                            <option value="muzaffargarh">Muzaffargarh</option>
                            <option value="nabisar">Nabisar</option>
                            <option value="nankanasahib">Nankana Sahib</option>
                            <option value="narang">Narang</option>
                            <option value="narowal">Narowal</option>
                            <option value="nasirabad">Nasirabad</option>
                            <option value="naudero">Naudero</option>
                            <option value="naukot">Naukot</option>
                            <option value="naushahravirkan">Naushahra Virkan</option>
                            <option value="naushahrofiroz">Naushahro Firoz</option>
                            <option value="nawabshah">Nawabshah</option>
                            <option value="nazirtown">Nazir Town</option>
                            <option value="newbadah">New Badah</option>
                            <option value="noorabad">Noorabad</option>
                            <option value="nooriabad">Nooriabad</option>
                            <option value="nowsheracantonment">Nowshera Cantonment</option>
                            <option value="nushki">Nushki</option>
                            <option value="okara">Okara</option>
                            <option value="ormara">Ormara</option>
                            <option value="pabbi">Pabbi</option>
                            <option value="padĪdan">Pad Īdan</option>
                            <option value="paharpur">Paharpur</option>
                            <option value="pakkishagwanwali">Pakki Shagwanwali</option>
                            <option value="pakpattan">Pakpattan</option>
                            <option value="panoaqil">Pano Aqil</option>
                            <option value="pasni">Pasni</option>
                            <option value="pasrur">Pasrur</option>
                            <option value="pattoki">Pattoki</option>
                            <option value="peshawar">Peshawar</option>
                            <option value="phalia">Phalia</option>
                            <option value="phulji">Phulji</option>
                            <option value="pinddadankhan">Pind Dadan Khan</option>
                            <option value="pindibhattian">Pindi Bhattian</option>
                            <option value="pindigheb">Pindi Gheb</option>
                            <option value="pirjogoth">Pir jo Goth</option>
                            <option value="pirmahal">Pir Mahal</option>
                            <option value="pirotak">Pirotak</option>
                            <option value="pishin">Pishin</option>
                            <option value="pithoro">Pithoro</option>
                            <option value="qadirpurran">Qadirpur Ran</option>
                            <option value="quetta">Quetta</option>
                            <option value="rabwah">Rabwah</option>
                            <option value="radhan">Radhan</option>
                            <option value="rahimyarkhan">Rahim Yar Khan</option>
                            <option value="raiwind">Raiwind</option>
                            <option value="rajajang">Raja Jang</option>
                            <option value="rajanpur">Rajanpur</option>
                            <option value="rajokhanani">Rajo Khanani</option>
                            <option value="ranipur">Ranipur</option>
                            <option value="rasulnagar">Rasulnagar</option>
                            <option value="ratodero">Ratodero</option>
                            <option value="rawalakot">Rawala Kot</option>
                            <option value="rawalakot">Rawalakot</option>
                            <option value="rawalpindi">Rawalpindi</option>
                            <option value="renalakhurd">Renala Khurd</option>
                            <option value="risalpur">Risalpur</option>
                            <option value="rohri">Rohri</option>
                            <option value="rojhan">Rojhan</option>
                            <option value="rustamjogoth">Rustam jo Goth</option>
                            <option value="sadiqabad">Sadiqabad</option>
                            <option value="sahiwal">Sahiwal</option>
                            <option value="sahiwal">Sahiwal</option>
                            <option value="sakrand">Sakrand</option>
                            <option value="samaro">Samaro</option>
                            <option value="sambrial">Sambrial</option>
                            <option value="sanghar">Sanghar</option>
                            <option value="sanglahill">Sangla Hill</option>
                            <option value="sanjwal">Sanjwal</option>
                            <option value="sann">Sann</option>
                            <option value="saraialamgir">Sarai Alamgir</option>
                            <option value="sarainaurang">Sarai Naurang</option>
                            <option value="saraisidhu">Sarai Sidhu</option>
                            <option value="sargodha">Sargodha</option>
                            <option value="sehwan">Sehwan</option>
                            <option value="setharjaold">Setharja Old</option>
                            <option value="shabqadar">Shabqadar</option>
                            <option value="shahdadkot">Shahdadkot</option>
                            <option value="shahdadpur">Shahdadpur</option>
                            <option value="shaheedabad">Shaheed Abad</option>
                            <option value="shahkot">Shahkot</option>
                            <option value="shahpur">Shahpur</option>
                            <option value="shahpurchakar">Shahpur Chakar</option>
                            <option value="shahrsultan">Shahr Sultan</option>
                            <option value="shakargarr">Shakargarr</option>
                            <option value="shangla">Shangla</option>
                            <option value="sharqpur">Sharqpur</option>
                            <option value="sheikhupura">Sheikhupura</option>
                            <option value="shikarpur">Shikarpur</option>
                            <option value="shinpokh">Shinpokh</option>
                            <option value="shorko">Shorko</option>
                            <option value="shujaabad">Shujaabad</option>
                            <option value="sialkot">Sialkot</option>
                            <option value="sibi">Sibi</option>
                            <option value="sillanwali">Sillanwali</option>
                            <option value="sinjhoro">Sinjhoro</option>
                            <option value="sitaroad">Sita Road</option>
                            <option value="skardu">Skardu</option>
                            <option value="sobhadero">Sobhadero</option>
                            <option value="sodhra">Sodhra</option>
                            <option value="sohbatpur">Sohbatpur</option>
                            <option value="sukhekemandi">Sukheke Mandi</option>
                            <option value="sukkur">Sukkur</option>
                            <option value="surab">Surab</option>
                            <option value="surkhpur">Surkhpur</option>
                            <option value="swabi">Swabi</option>
                            <option value="swat">Swat</option>
                            <option value="tal">Tal</option>
                            <option value="talagang">Talagang</option>
                            <option value="talamba">Talamba</option>
                            <option value="talhar">Talhar</option>
                            <option value="tandlianwala">Tandlianwala</option>
                            <option value="tandoadam">Tando Adam</option>
                            <option value="tandoallahyar">Tando Allahyar</option>
                            <option value="tandobago">Tando Bago</option>
                            <option value="tandoghulamali">Tando Ghulam Ali</option>
                            <option value="tandojam">Tando Jam</option>
                            <option value="tandomitthakhan">Tando Mittha Khan</option>
                            <option value="tandomuhammadkhan">Tando Muhammad Khan</option>
                            <option value="tangi">Tangi</option>
                            <option value="tangwani">Tangwani</option>
                            <option value="tank">Tank</option>
                            <option value="taragarwala">Taragar wala</option>
                            <option value="taunsa">Taunsa</option>
                            <option value="taxila">Taxila</option>
                            <option value="tharparkar">Tharparkar</option>
                            <option value="tharushah">Tharu Shah</option>
                            <option value="thatta">Thatta</option>
                            <option value="thul">Thul</option>
                            <option value="tobateksingh">Toba Tek Singh</option>
                            <option value="topi">Topi</option>
                            <option value="turbat">Turbat</option>
                            <option value="ubauro">Ubauro</option>
                            <option value="umarkot">Umarkot</option>
                            <option value="ustamuhammad">Usta Muhammad</option>
                            <option value="uthal">Uthal</option>
                            <option value="utmanzai">Utmanzai</option>
                            <option value="uzhnu">Uzhnu</option>
                            <option value="vihari">Vihari</option>
                            <option value="wahcantt">Wah Cantt</option>
                            <option value="wana">Wana</option>
                            <option value="warah">Warah</option>
                            <option value="warburton">Warburton</option>
                            <option value="wazirabad">Wazirabad</option>
                            <option value="waziristan">Waziristan</option>
                            <option value="yazman">Yazman</option>
                            <option value="zafarwal">Zafarwal</option>
                            <option value="zahirpir">Zahir Pir</option>
                            <option value="zaida">Zaida</option>
                            <option value="zhob">Zhob</option>
                            <option value="ziarat">Ziarat</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group">
                        <input class="form-control btn-primary" type="submit" value="Search"/>
                    </div>
                    </div>
                </form>
            </div> 
        </div>

    <div class="row">
        <div class="col-lg-12">
            <h1>
                Available Job Seekers
            </h1>
        </div>
        <hr/>
 
    <div class="row" style="margin-left:3%;">
        @foreach($Pinfos as $Pinfo)
            @if($Pinfo->username!=='' && $Pinfo->email!=='' && $Pinfo->image!=='' && $Pinfo->age!=='' && $Pinfo->phone!=='' && $Pinfo->address!=='' && $Pinfo->country!=='' && $Pinfo->city!=='' && $Pinfo->town!=='' && $Pinfo->martial_status!=='' && $Pinfo->nationality!=='' && $Pinfo->religion!=='' && $Pinfo->matric!=='' && $Pinfo->intermediate!=='' && $Pinfo->email!=='' && $Pinfo->email!=='' && $Pinfo->email!=='' && $Pinfo->email!=='')

        <label>Job Seeker Name: </label>
            {{$Pinfo->username}}
        <label>Town Name: </label>
            {{$Pinfo->town}}
        <a href="Design/{{ $Pinfo->id }}"><img src="{{ asset($Pinfo->image) }}" style="width:200px; height:150px;" /></a>
            <br/>
@endif
        @endforeach
    </div>
</div>
@endsection






@section('scripts')


@endsection














