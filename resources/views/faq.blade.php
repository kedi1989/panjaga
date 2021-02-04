<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        @include('includes.head')
    <body>
        <div class="main-page-container">
        @include('includes.header')
        <div class="main-container">
        
        <div class="content-container">
            <h2 class="big-header"><span class="header-gap"></span>NAJCZĘŚCIEJ ZADAWANE PYTANIA</h2>
        </div>

        <div class="faq-container">
            <div class="content-container">

                <div class="accordion"><h3>Ile kosztuje pranie dywanów i wykładzin ?</h3></div>
                <div class="panel">
                <p>Koszt prania dywanów i wykładzin jest uzależniony od wielkości danej powierzchni stopnia zabrudzenia oraz rodzaju włókna. W przypadku dywanów cena wynosi od 6 do 11 zł /m2, natomiast przy wykładzinach jest to koszt od 6 do 10 zł /m2. Zapraszamy odwiedzić zakładkę cennik -> www.studioczystosci.pl/cennik</p>
                </div>

                <div class="accordion"><h3>Ile kosztuje pranie tapicerki meblowej ?</h3></div>
                <div class="panel">
                <p>Koszt prania tapicerki meblowej uzależniony jest od wielkości czyszczonego mebla, rodzaju materiału tapicerskiego oraz stopnia i rodzaju pochodzenia zabrudzeń. Przy rozmowie telefonicznej zawsze podajemy zakres cen ” od- do ”, natomiast dokładną wycenę jesteśmy w stanie stwierdzić dopiero u klienta, bądź poprzez wcześniejsze przesłanie nam zdjęć rzeczy do czyszczenia .
Ze względu na różnorodność mebli tapicerowanych zapraszamy do zakładki cennik www.studioczystosci.pl/cennik</p>
                </div>

                <div class="accordion"><h3>Jakich środków używacie do prania i czy są bezpieczne dla zdrowia ?</h3></div>
                <div class="panel">
                <p>Ze względu na naszą wiedzę i długoletnie doświadczenie większość plam jest usuwana bezproblemowo. Usuwamy plamy po gumach, plastelinie, tłuszczu, sokach, kawie, herbacie, tuszu atramentowym i wielu innych. Używamy profesjonalnych środków czystości i specjalistycznego sprzętu piorącego. Do trudniejszych plam i zabrudzeń używamy dedykowanych środków – odplamiaczy które pozwalają nam skutecznie zniwelować zabrudzenia. Natomiast należy pamiętać jeżeli wcześniej plamy były zapierane przez klienta nieodpowiednią chemią istnieje ryzyko utrwalenia. W przypadku włókien naturalnych niektóre plamy są niemożliwe do usunięcia. Spotykane zażółcenia na wełnianych włóknach powodują najczęściej trwałe odbarwienie. Jeżeli włókno jest narażone na długotrwałe padanie promieni słonecznych jest to już trwałe wypłowienie materiału.</p>
                </div>

                <div class="accordion"><h3>Jakiej metody oraz sprzętu używacie do prania ?</h3></div>
                <div class="panel">
                <p>Używamy profesjonalnych i sprawdzonych środków czyszczących . Stosujemy około kilkudziesięciu różnych preparatów, dobieramy odpowiednie płyny, proszki, odplamiacze do danego materiału oraz rodzaju zabrudzeń. Wszystkie używane przez nas detergenty są atestowane i bezpieczne dla zdrowia. Głównie bazujemy na środkach marek: KARCHER, CHEMSPEC, PROCHEM, TERSUS, są to najbardziej renomowane i cenione firmy na całym świecie.</p>
                </div>

            </div>
        </div>
        



        </div>

</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

            @include('includes.footer')
    </body>
</html>