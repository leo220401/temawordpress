<?php get_header(); ?>
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h2>Tema do Mortal Kombat</h2>
            
            <!--slide de imagens do site-->
            <!--<div class="container">-->	
            	<div id="logoSite" class="carousel slide" data-ride="carousel" >
            
            		<!--Indicadores do slide-->
            		<ol class="carousel-indicators">
            			<li data-target="#logoSite" data-slide-to="0" class="active"></li>
            			<li data-target="#logoSite" data-slide-to="1"></li>
            			<li data-target="#logoSite" data-slide-to="2"></li>
            			<li data-target="#logoSite" data-slide-to="3"></li>
            		</ol>
            		
            		<!--Imagens passando-->
            		<div class="carousel inner">
            			<div class="carousel-item active">
            				<img src="<?php echo get_template_directory_uri()?>/assets/images/im1.jpg" id="imagemSlide" class="d-block w-100">
            			</div>
            			<div class="carousel-item">
            				<img src="<?php echo get_template_directory_uri()?>/assets/images/im2.jpg" id="imagemSlide" class="d-block w-100">
            			</div>
            			<div class="carousel-item">
            				<img src="<?php echo get_template_directory_uri()?>/assets/images/im3.jpg" id="imagemSlide" class="d-block w-100">
            			</div>
            			<div class="carousel-item">
            				<img src="<?php echo get_template_directory_uri()?>/assets/images/im4.png" id="imagemSlide" class="d-block w-100">
            			</div>
            		</div>
            
            		<!--setas de proximo e anterior-->
            		<a class="carousel-control-prev" href="#logoSite" role="button" data-slide="prev">
            			<span class="carousel-control-prev-icon"></span>
            			<span class="sr-only">Anterior</span>
            		</a>
            
            		<a class="carousel-control-next" href="#logoSite" role="button" data-slide="next">
            			<span class="carousel-control-next-icon"></span>
            			<span class="sr-only">Avançar</span>
            		</a>
            	</div>
            </div>
        </div>
</div>

<div class="container">
<div class="row">
    <div class="col-4 my-4"> 
    <b> Post 1 </b>
         <div class="card">
             <img src="<?php echo get_template_directory_uri()?>/assets/images/im5.png"></img>
             
             <div class="card-body"> 
                 Biografia<br>
                 Morte e vingança constituem a essência do ser de Jason Voorhees . Ele morreu quando era um jovem garoto. A mãe dele morreu de sofrimento 
                 e raiva. Quando ela foi assassinada, Jason retornou e a vingou. Muitas vezes, os vivos tentaram mandar ele de volta para o terreno da 
                 morte. Ele foi esfaqueado, afogado, eletrocutado, jogado para o espaço. Mas Jason não pode ser morto. Não pode ser parado.
             </div>
         </div>
    </div>
    
    <div class="col-4 my-4"> 
    <b> Post 2 </b>
         <div class="card">
             <img src="<?php echo get_template_directory_uri()?>/assets/images/im6.png"></img>
             
             <div class="card-body"> 
                Biografia<br>
                Os Xenomorphs tinham descido sobre Outworld há muito tempo, mas os ovos dormentes que deixaram para trás só recentemente foram 
                encontrados agora. O líder dos Tarkatans tinha pego uma das esferas de couro, só para ver o que se abriu e seu próprio portal 
                ocupante havia uma cara. Mais tarde, após o desfecho que tinha caído, a descendência estrangeira estourou a partir do peito do 
                pobre líder dos Tarkatans, tendo características de ambos: Xenomorph e Tarkatan. Ele iludiu o resto dos soldados Tarkatans e, 
                eventualmente, os mataram. A criatura agora vaga por Outworld, à procura de mais hospedeiros. Sua força animal e incrível fúria 
                faz o estrangeiro ser quase imparável!
                 </div>
         </div>
    </div>
    
    <div class="col-4 my-4"> 
    <b> Post 3 </b>
         <div class="card">
             <img src="<?php echo get_template_directory_uri()?>/assets/images/im7.jpg"></img> 
             <div class="card-body"> 
             Biografia<br>
            Um ex-monge Shaolin e um membro da White Lotus Society,ele é o último descendente do Great Kung Lao que foi derrotado por Goro a 500 anos. 
            Percebendo o perigo da ameaça de Outworld,ele se junta a Liu Kang entrando no torneio de Shao Kahn.
            </div>
         </div>
    </div>
</div>
<?php get_footer();?>