<div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
									<div class="alert-icon">
									</div>
									<div class="alert-text" id="titulo">
									</div>
								</div>


<?php if (isset($scripts)) {echo "";};?>

<div class="col-lg-6">
																		<!--begin::Example-->
																		<!--begin::Card-->
																		<div class="card card-custom">
																			<div class="card-header">
																				<div class="card-title">
																					<h3 id="quiz-counter" class="card-label"></h3>
																				</div>
																			</div>
																			<div class="card-body"><div id="quiz">
  <div id="quiz-header">
  </div>
  <div id="quiz-start-screen">
    <p><a href="#" id="quiz-start-btn" class="quiz-button">Iniciar</a></p>
  </div>
</div></div>
<div id="mask" style="
    position: fixed;
    height: 100vh;
    width: 100vw;
    background: rgba(0,0,0,0.5);
    z-index: 9;
		top:0;
		left:0;
                      "><div class="counterpshow" style="
    display: block;
    font-size: 50vh;
    margin: 15vh auto;
    position: relative;
    text-align: center;
    color: #fff;
    text-shadow: 0px 0px 30px rgb(225 255 255 / 50%),0px 0px 80px rgb(225 255 255 / 70%);
">5</div></div>
																		</div>

																		<!--end::Example-->
																	</div>
																	<script type="text/javascript">var counter = 5;
																	var interval = setInterval(function() {
																	    counter--;
																	    console.log(counter)
																			$(".counterpshow").html(counter);
																	    if (counter <= 0) {
																	        $("#mask").hide();
																	        clearInterval(interval);
																					$("#quiz-start-btn").trigger("click");
																	    }
																	}, 1000);
																	</script>
