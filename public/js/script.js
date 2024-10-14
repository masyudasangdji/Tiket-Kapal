// function hitung()
// {
// 	let dewasa = document.getElementById('dewasa').value;
// 	let bayi = document.getElementById('bayi').value;
// 	let bayar = document.getElementById('bayar');
// 	let hasil1 = parseInt(dewasa) * 18000;
// 	let hasil2 = parseInt(bayi) * 5200;
	
// 	// let hasil = hasil1;
// 	if(!isNaN(hasil1) && !isNaN(hasil2)) {
// 	bayar.innerHTML = hasil1+hasil2;
// 	}else if (!isNaN(hasil1)){
// 	bayar.innerHTML = hasil1;
// 	}else if(!isNaN(hasil2)){
// 	bayar.innerHTML = hasil2;
// 	}else{
// 	bayar.innerHTML = '0';
// 	}
// }

function harga(kendaraan)
{
	let dewasa = document.getElementById('dewasa').value;
	let bayi = document.getElementById('bayi').value;
	let bayar = document.getElementById('bayar');
	let hasil1 = parseInt(dewasa) * 166208;
	let hasil2 = parseInt(bayi) * 113418;
	let gol = document.getElementById('gol').value;
	// let gol2 = document.getElementById('gol2');
	let biaya = document.getElementById('biaya');

	let data = "";
	let combo = "";
	let harga = 0;
		switch(kendaraan)
	{
		case "Golongan I" :
		{
			data = "Golongan I ";
			harga = 64090;
		}
		break;
		case "Golongan II" :
		{
			data = "Golongan II";
			harga = 173435;
		}
		break;
		case "Golongan III" :
		{
			data = "Golongan III";
			harga = 184810;
		}
		break;
		case "Golongan IV" :
		{
			// data = "<p><strong>Keterangan</strong></p><ol><li>Kendaraan Penumpang (Panjang s/d 5 m)</li><li>Kendaraan Barang (Panjang s/d 5 m)</li></ol>";
			// combo = "<label>Pilih Jenis</label><select name='kendaraan' onchange='harga(this.value)' class='form-control' id='gol2'><option>-Pilih Jenis Kendaraan-</option><option value='Golongan IVa'>Kendaraan Penumpang</option><option value='Golongan IVb'>Kendaraan Barang</option></select>";
			harga = 906779;
		}
		break;
		// case "Golongan IVb" :
		// {
		// 	data = "<p><strong>Keterangan</strong></p><ol><li>Kendaraan Penumpang (Panjang s/d 5 m)</li><li>Kendaraan Barang (Panjang s/d 5 m)</li></ol>";
		// 	// combo = "<label>Pilih Jenis</label><select name='kendaraan' onchange='harga(this.value)' class='form-control' id='gol2'><option>-Pilih Jenis Kendaraan-</option><option value='Golongan IVa'>Kendaraan Penumpang</option><option value='Golongan IVb'>Kendaraan Barang</option></select>";
		// 	harga = 468741;
		// }
		break;
		case "Golongan V" :
		{
			// data = "<p><strong>Keterangan</strong></p><ol><li>Kendaraan Penumpang (Panjang s/d 7 m)</li><li>Kendaraan Barang (Panjang s/d 7 m)</li></ol>";
			// combo = "<label>Pilih Jenis</label><select name='kendaraan' class='form-control' id='gol2'><option>-Pilih Jenis Kendaraan-</option><option value='Golongan Va'>Kendaraan Penumpang</option><option value='Golongan Vb'>Kendaraan Barang</option></select>";
			harga = 1124720;
		}
		// break;
		// case "Golongan Vb" :
		// {
		// 	data = "<p><strong>Keterangan</strong></p><ol><li>Kendaraan Penumpang (Panjang s/d 7 m)</li><li>Kendaraan Barang (Panjang s/d 7 m)</li></ol>";
		// 	// combo = "<label>Pilih Jenis</label><select name='kendaraan' class='form-control' id='gol2'><option>-Pilih Jenis Kendaraan-</option><option value='Golongan Va'>Kendaraan Penumpang</option><option value='Golongan Vb'>Kendaraan Barang</option></select>";
		// 	harga = 684669;
		// }
		break;
		case "Golongan VI" :
		{
			// data = "<p><strong>Keterangan</strong></p><ol><li>Kendaraan Penumpang (Panjang s/d 10 m)</li><li>Kendaraan Barang (Panjang s/d 10 m)</li></ol>";
			// combo = "<label>Pilih Jenis</label><select name='kendaraan' class='form-control' id='gol2'><option>-Pilih Jenis Kendaraan-</option><option value='Golongan VIa'>Kendaraan Penumpang</option><option value='Golongan VIb'>Kendaraan Barang</option></select>";
			harga = 1639795;
		}
		// break;
		// case "Golongan VIb" :
		// {
		// 	data = "<p><strong>Keterangan</strong></p><ol><li>Kendaraan Penumpang (Panjang s/d 10 m)</li><li>Kendaraan Barang (Panjang s/d 10 m)</li></ol>";
		// 	// combo = "<label>Pilih Jenis</label><select name='kendaraan' class='form-control' id='gol2'><option>-Pilih Jenis Kendaraan-</option><option value='Golongan VIa'>Kendaraan Penumpang</option><option value='Golongan VIb'>Kendaraan Barang</option></select>";
		// 	harga = 1054738;
		// }
		break;
		case "Golongan VII" :
		{
			// data = "Golongan VII Panjang Kendaraan <strong>(Panjang 10 s/d 12 m)</strong>";
			harga = 1718703;
		}
		break;
		case "Golongan VIII" :
		{
			// data = "Golongan VIII Panjang Kendaraan <strong>(Panjang 12 s/d 16 m)</strong>";
			harga = 2622895;
		}
		break;
		case "Golongan IX" :
		{
			// data = "Golongan IX Panjang Kendaraan <strong>(Panjang Diatas 16 m)</strong>";
			harga = 7276095;
		}
		break;
		default : data = "";
	}

	document.getElementById('keterangan').innerHTML = data;
	document.getElementById('jenis').innerHTML = combo;

	// let hasil = hasil1;
	if(dewasa != 0 && bayi != 0 && gol != "") {
		bayar.innerHTML = hasil1+hasil2+harga;
		biaya.value = hasil1+hasil2+harga;
	}else if(dewasa != 0 && gol != ""){
		bayar.innerHTML = hasil1+harga;
		biaya.value = hasil1+harga;
	}else if(bayi != 0 && gol != ""){
		bayar.innerHTML = hasil2+harga;
		biaya.value = hasil2+harga;
	}else if (dewasa != 0){
		bayar.innerHTML = hasil1;
		biaya.value = hasil1;
	}else if(bayi != 0){
		bayar.innerHTML = hasil2;
		biaya.value = hasil2;
	}else if(gol != ""){
		bayar.innerHTML = harga;
		biaya.value = harga;
	}else{
		bayar.innerHTML = '0';
		biaya.value = 0;
	}

	//Golongan 2
// 	if(!isNaN(gol2)){
// 	switch(gol2.value){
// 		case "Golongan IVa" :
// 			{
// 				harga = 500755;
// 			}
// 		break;
// 		case "Golongan IVb" :
// 			{
// 				harga = 468741;
// 			}
// 			break;
// 			default : harga = 0;
// 	}
// }else{
// 	harga = 0;
// }

	// if(!isNaN(hasil1) && !isNaN(hasil2) || gol == "") {
	// 	bayar.innerHTML = hasil1+hasil2+harga;
	// 	biaya.value = hasil1+hasil2+harga;
	// 	}else if (!isNaN(hasil1)){
	// 	bayar.innerHTML = hasil1;
	// 	biaya.value = hasil1;
	// 	}else if(!isNaN(hasil2)){
	// 	bayar.value = hasil2;
	// 	biaya = hasil2;
	// 	}else{
	// 	bayar.innerHTML = '0';
	// 	biaya.value = 0;
	// 	}
}