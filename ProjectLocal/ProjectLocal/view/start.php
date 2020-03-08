  <?php
 ob_start();
 ?>
  
  <br>
  <p class="bodyHeaderMain">Welcome to FEC!</p> 
  
  
  <div class="courseDetailDiv">
	<p>FEC (Free Education Courses) is a public VET institution, situated in the north-west of Germany, which proovides initial and additional vocational training and retraining for young people and adults.</p>
	<p>Around 2400 students of various ages, both after basic and secondary school, study at FEC in 23 curriculum groups. All the curricula are offered both at school and on work-based learning scheme. Instruction languages are German and English. We also offer a wide range of courses for initial training, in-service education and retraining to over 3000 adults yearly.</p>
	<hr>
	<p><i>Construction and wood</i> - finishing work in construction (painter, tiler and plasterer), painter, plasterer, tiler, carpenter-log house builder, carpenter, water system technician, concrete worker, bricklayer, cabinetmaker, wood-machine operaator.</p>
	<p><i>Technology</i> - electrician, automatician, manufacturing and industrial automatician, mechatronic, miner, laboratory technician, operator of chemical processes</p>
	<p><i>Economics, logistics and entrepreneurship</i> - warehouse worker, small business entrepreneur, transport organizer, accountant, business administration specialist</p>
	<p><i>IT & multimeedia</i> – junior IT systems specialist​, junior software developer​, junior multimedia specialist​, small companies ICT support specialist​</p>
	<p><i>Food & Catering</i> - cook assistan, cook, technology of bakery and pastry-cook, confectioner, waiter​</p>
	<p><i>Metal & Automotive</i> – welder, welder (semi-automatic), machine-tool worker, vehicle technician, cartechnician, motorcartechnician</p>
	<p><i>Service</i> - cleaner, tourism organizer, travel consultant, shop assistant, dressmaker, clothe sewing, tailor, hairdresser</p>
 
 
 
 </div>

 <?php
 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>