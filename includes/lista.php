<?php

$resultados = '';
foreach($imoveis as $imovel){
    $resultados .= ' <div class="property horizontal d-flex">
    <div class="mr-3 img-entry">
      <a href="imovel.php"><img src="images/property_1-sm.jpg" alt="Image" class="img-fluid"></a>
    </div>
                  
    <div class="prop-details p-3">
      <div><a href="imovel.php"><strong class="price">'.$imovel->valor.'</strong></a></div>
      <div class="mb-2 d-flex justify-content-between">
      <p><span>'.$imovel->quartos.' Quartos</span>,
        <span>'.$imovel->banheiros.' Banheiros</span>,
        <span>'.$imovel->tamanho.'</span>
      </div>
      <div>'.$imovel->endereco.'</div>
    </div>
  </div>';  
}
?>


<div class="site-section" id="imoveis">
      <div class="container">
        
        <div class="row">
          <div class="col-md-3 order-1 order-md-2">
          <div class="mb-5">
            <h3 class="text-black mb-4 h5 font-family-2">Filtro</h3>
            <form action="#">
              <div class="form-group">
                <div class="select-wrap">
                  <span class="icon icon-keyboard_arrow_down"></span>
                  <select class="form-control px-3">
                    <option value="">Zona Urbana</option>
                    <option value="">Zona Rural</option>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <div class="select-wrap">
                  <span class="icon icon-keyboard_arrow_down"></span>
                  <select class="form-control px-3">
                    <option value="">4 Quartos, 3 Banheiros</option>
                    <option value="">5 Quartos, 4 Banheiros</option>
                    <option value="">5+ Quartos, 4+ Banheiros</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="select-wrap">
                  <span class="icon icon-keyboard_arrow_down"></span>
                  <select class="form-control px-3">
                    <option value="">Venda</option>
                    <option value="">Loca????o</option>
                    </select>
                </div>
              </div>
            </form>
            </div>

            <div class="mb-5">
              <h3 class="text-black mb-4 h5 font-family-2">Filtrar por valor</h3>
              <div id="slider-range" class="border-primary"></div>
              <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
            </div>
          </div>
          <div class="col-md-9 order-2 order-md-1"><?=$resultados?>
            
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-9">
            <div class="custom-pagination text-center">
              <span>1</span>
              <a href="#">2</a>
              <a href="#">3</a>
              <span class="more-page">...</span>
              <a href="#">7</a>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="properties-section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-7 text-left">
            <h2 class="section-title mb-3">Mais im??veis</h2>
          </div>
          <div class="col-md-5 text-left text-md-right">
            <div class="custom-nav1">
              <a href="#" class="custom-prev1"><</a><span class="mx-3">/</span><a href="#" class="custom-next1">></a>
            </div>
          </div>
        </div>

        <div class="owl-carousel nonloop-block-13 mb-5">

        <div class="property">
            <a href="imovel.php">
              <img src="images/property_1.jpg" alt="Image" class="img-fluid">
            </a>
            <div class="prop-details p-3">
              <div><strong class="price">R$3.400,000</strong></div>
              <div class="mb-2 d-flex justify-content-between">
                <span class="w border-r">6 Quartos</span>
                <span class="w border-r">4 Banheiros</span>
                <span class="w">430 m2</span>
                </div>
              <div>Residencial Nove - Alphaville</div>
            </div>
          </div>

          <div class="property">
            <a href="imovel.php">
              <img src="images/property_2.jpg" alt="Image" class="img-fluid">
            </a>
            <div class="prop-details p-3">
              <div><strong class="price">R$3.900,000</strong></div>
              <div class="mb-2 d-flex justify-content-between">
                <span class="w border-r">8 Quartos</span>
                <span class="w border-r">4 Banheiros</span>
                <span class="w">450 m2</span>
              </div>
              <div>Residencial Dois - Tamobor??</div>
            </div>
          </div>

          <div class="property">
            <a href="imovel.php">
              <img src="images/property_3.jpg" alt="Image" class="img-fluid">
            </a>
            <div class="prop-details p-3">
              <div><strong class="price">R$4.700,000</strong></div>
              <div class="mb-2 d-flex justify-content-between">
                <span class="w border-r">6 Quartos</span> 
                <span class="w border-r">4 Banheiros</span>
                <span class="w">530 m2</span>
                </div>
              <div>Residencial Doze - Alphaville</div>
            </div>
          </div>

          <div class="property">
            <a href="imovel.php">
              <img src="images/property_4.jpg" alt="Image" class="img-fluid">
            </a>
            <div class="prop-details p-3">
              <div><strong class="price">R$3.100,000</strong></div>
              <div class="mb-2 d-flex justify-content-between">
                <span class="w border-r">5 Quartos</span>
                <span class="w border-r">3 Banheiros</span>
                <span class="w">480 m2</span>
              </div>
              <div>Residencial Tr??s - Tambor??</div>
            </div>
          </div>

        </div>
        
      </div>
    </div>

    <div class="py-5 bg-light site-section how-it-works" id="howitworks-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">

        </div>
        <div class="row">
          <div class="col-md-4 text-center">
            <div class="pr-5">
              <span class="custom-icon flaticon-flat text-primary"></span>
              <h3 class="text-dark">Corretagem de Im??veis</h3>
              <p>Somos especialistas em Consultoria e Corretagem. Agende um hor??rio</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5">
              <span class="custom-icon flaticon-coin text-primary"></span>
              <h3 class="text-dark">Venda e Loca????o</h3>
              <p>Ofere??emos Im??veis do mais alto padr??o para voc?? e sua fam??lia</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5">
              <span class="custom-icon flaticon-home text-primary"></span>
              <h3 class="text-dark">Investimentos Imobili??rios</h3>
              <p>Grandes oportunidades para investir, ao lado de quem entende do assunto</p>
            </div>
          </div>
        </div>
      </div>
    </div>