@extends('layouts.frontend')

@section('content')
<div class="container py-5">
  <h2 class="text-center mb-4">Form Pemesanan Laundry</h2>

  @if (session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
  @endif

  <form action="{{ route('order.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" required>
    </div>

    <div class="mb-3">
      <label for="telepon" class="form-label">Nomor HP</label>
      <input type="tel" class="form-control" id="telepon" name="telepon" required>
    </div>

    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat</label>
      <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
    </div>

    <div class="mb-3">
      <label for="layanan" class="form-label">Pilih Layanan</label>
      <select class="form-select" name="layanan" id="category" required>
        <option value="">-- Pilih --</option>
        <option value="linen">Linen</option>
        <option value="uniform">Uniform</option>
        <option value="satuan">Satuan</option>
        <option value="beddings">Beddings</option>
        <option value="other">Other Items</option>
        <option value="kiloan">Daily Kiloan</option>
        <option value="tas_sepatu">Tas & Sepatu</option>
        <option value="membership">Membership Packages</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="item" class="form-label">Pilih Item</label>
      <select class="form-select" id="item" name="item" required>
        <option value="">-- Pilih kategori dulu --</option>
      </select>
    </div>

    <div class="mb-3 d-none" id="quantity-group">
      <label for="quantity" class="form-label">Jumlah</label>
      <input type="number" class="form-control" name="quantity" id="quantity" min="1" value="1">
    </div>

    <div class="mb-3">
      <label for="catatan" class="form-label">Catatan</label>
      <textarea class="form-control" id="catatan" name="catatan" rows="2"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Kirim Pesanan</button>
  </form>

  <div class="accordion mt-5" id="accordionLaundry">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      <!-- LINEN -->
      <div class="col">
        <div class="accordion-item shadow rounded border">
          <h2 class="accordion-header" id="linenHeading">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#linenCollapse">
              Linen
            </button>
          </h2>
          <div id="linenCollapse" class="accordion-collapse collapse" data-bs-parent="#accordionLaundry">
            <div class="accordion-body">
              <ul class="mb-0">
                <li>Bed Sheet Double - Rp 2.500</li>
                <li>Bed Sheet Single - Rp 2.400</li>
                <li>Duvet Cover Double - Rp 5.000</li>
                <li>Duvet Cover Single - Rp 4.700</li>
                <li>Pillow Case - Rp 1.200</li>
                <li>Bath Towel - Rp 2.500</li>
                <li>Hand Towel - Rp 1.500</li>
                <li>Face Towel - Rp 1.200</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- UNIFORM -->
      <div class="col">
        <div class="accordion-item shadow rounded border">
          <h2 class="accordion-header" id="uniformHeading">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#uniformCollapse">
              Uniform
            </button>
          </h2>
          <div id="uniformCollapse" class="accordion-collapse collapse" data-bs-parent="#accordionLaundry">
            <div class="accordion-body">
              <ul class="mb-0">
                <li>Shirt - Rp 7.000</li>
                <li>Trouser - Rp 7.000</li>
                <li>Jas / Jacket - Rp 9.000</li>
                <li>Skirt (Short) - Rp 5.100</li>
                <li>Skirt (Long) - Rp 5.600</li>
                <li>Cook Jacket - Rp 7.300</li>
                <li>Apron Kitchen - Rp 3.000</li>
                <li>T-shirt - Rp 7.000</li>
                <li>Neck Tie - Rp 4.500</li>
                <li>Safari Shirt - Rp 13.000</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- SATUAN -->
      <div class="col">
        <div class="accordion-item shadow rounded border">
          <h2 class="accordion-header" id="satuanHeading">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#satuanCollapse">
              Satuan
            </button>
          </h2>
          <div id="satuanCollapse" class="accordion-collapse collapse" data-bs-parent="#accordionLaundry">
            <div class="accordion-body">
              <ul class="mb-0">
                <li>Atasan (Kemeja/Blouse/Batik) - Rp 25.000</li>
                <li>Bawahan (Rok/Jeans/Celana) - Rp 18.000</li>
                <li>Luaran (Jaket/Hoodie) - Rp 30.000</li>
                <li>Jas (Blazer/Mantel) - Rp 50.000</li>
                <li>Jas Setelan - Rp 70.000</li>
                <li>Dress (Long Dress/Baju Muslim) - Rp 25.000</li>
                <li>Gaun Panjang (Gaun Pesta/Variasi) - Rp 50.000</li>
                <li>Kebaya - Rp 30.000</li>
                <li>Alat Ibadah (Mukena/Sajadah) - Rp 25.000</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- BEDDINGS -->
      <div class="col">
        <div class="accordion-item shadow rounded border">
          <h2 class="accordion-header" id="beddingsHeading">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#beddingsCollapse">
              Beddings
            </button>
          </h2>
          <div id="beddingsCollapse" class="accordion-collapse collapse" data-bs-parent="#accordionLaundry">
            <div class="accordion-body">
              <ul class="mb-0">
                <li>Pillow - Rp 20.000</li>
                <li>Pillowcase - Rp 25.000</li>
                <li>Sprei Single - Rp 15.000</li>
                <li>Sprei Double - Rp 25.000</li>
                <li>Selimut Single - Rp 15.000</li>
                <li>Selimut Double - Rp 25.000</li>
                <li>Bed Cover Single - Rp 23.000</li>
                <li>Bed Cover Double - Rp 32.000</li>
                <li>Paket Bedding Single - Rp 35.000</li>
                <li>Paket Bedding Double - Rp 50.000</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- OTHER ITEMS -->
      <div class="col">
        <div class="accordion-item shadow rounded border">
          <h2 class="accordion-header" id="otherHeading">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#otherCollapse">
              Other Items
            </button>
          </h2>
          <div id="otherCollapse" class="accordion-collapse collapse" data-bs-parent="#accordionLaundry">
            <div class="accordion-body">
              <ul class="mb-0">
                <li>Handuk - Rp 15.000</li>
                <li>Dompet Non Leather Kecil - Rp 25.000</li>
                <li>Dompet Non Leather Besar - Rp 40.000</li>
                <li>Dompet Leather Kecil - Rp 30.000</li>
                <li>Dompet Leather Besar - Rp 45.000</li>
                <li>Atasan (Kemeja/Batik) - Rp 25.000</li>
                <li>Bawahan (Rok/Jeans) - Rp 18.000</li>
                <li>Luaran (Jaket/Hoodie) - Rp 30.000</li>
                <li>Jas - Rp 50.000</li>
                <li>Jas Setelan - Rp 70.000</li>
                <li>Dress - Rp 25.000</li>
                <li>Gaun Pesta - Rp 50.000</li>
                <li>Kebaya - Rp 30.000</li>
                <li>Alat Ibadah - Rp 25.000</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- DAILY KILOAN -->
      <div class="col">
        <div class="accordion-item shadow rounded border">
          <h2 class="accordion-header" id="kiloanHeading">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kiloanCollapse">
              Daily Kiloan
            </button>
          </h2>
          <div id="kiloanCollapse" class="accordion-collapse collapse" data-bs-parent="#accordionLaundry">
            <div class="accordion-body">
              <ul class="mb-0">
                <li>Cuci Kering Lipat - Rp 7.000/kg</li>
                <li>Cuci Kering Gosok (3 Hari) - Rp 9.000/kg</li>
                <li>Cuci Kering Gosok (1 Hari) - Rp 12.000/kg</li>
                <li>Cuci Kering Gosok (12 Jam) - Rp 18.000/kg</li>
                <li>Cuci Kering Gosok (6 Jam) - Rp 22.000/kg</li>
                <li>Setrika Kiloan Reguler (2 Hari) - Rp 7.000/kg</li>
                <li>Setrika Kiloan Express (1 Hari) - Rp 9.000/kg</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- TAS & SEPATU -->
      <div class="col">
        <div class="accordion-item shadow rounded border">
          <h2 class="accordion-header" id="tasHeading">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tasCollapse">
              Tas & Sepatu
            </button>
          </h2>
          <div id="tasCollapse" class="accordion-collapse collapse" data-bs-parent="#accordionLaundry">
            <div class="accordion-body">
              <ul class="mb-0">
                <li>Sepatu Nylon / Canvas - Rp 45.000</li>
                <li>Sepatu Putih - Rp 55.000</li>
                <li>Sepatu Wanita - Rp 45.000</li>
                <li>Suede / Leather - Rp 100.000</li>
                <li>Sandal - Rp 25.000</li>
                <li>Unyellowing - Rp 120.000</li>
                <li>Tas Non Leather Kecil - Rp 30.000</li>
                <li>Tas Non Leather Sedang - Rp 40.000</li>
                <li>Tas Non Leather Besar - Rp 50.000</li>
                <li>Tas Leather Kecil - Rp 75.000</li>
                <li>Tas Leather Sedang - Rp 100.000</li>
                <li>Tas Leather Besar - Rp 150.000</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- MEMBERSHIP PACKAGES -->
      <div class="col">
        <div class="accordion-item shadow rounded border">
          <h2 class="accordion-header" id="membershipHeading">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#membershipCollapse">
              Membership Packages
            </button>
          </h2>
          <div id="membershipCollapse" class="accordion-collapse collapse" data-bs-parent="#accordionLaundry">
            <div class="accordion-body">
              <ul class="mb-0">
                <li>Marquis - Rp 150.000</li>
                <li>Prince - Rp 250.000</li>
                <li>Duke - Rp 375.000</li>
                <li>King - Rp 500.000</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- MENGAPA KAMI -->
      <div class="col">
        <div class="accordion-item shadow rounded border">
          <h2 class="accordion-header" id="whyHeading">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#whyCollapse">
              Mengapa Kami?
            </button>
          </h2>
          <div id="whyCollapse" class="accordion-collapse collapse" data-bs-parent="#accordionLaundry">
            <div class="accordion-body">
              <ul class="mb-0">
                <li>100% Garansi Puas</li>
                <li>Antar Jemput Gratis</li>
                <li>Parfum Premium</li>
                <li>Laundry Express 24 jam</li>
                <li>Pegawai Terlatih</li>
                <li>Teknologi Modern</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- ALAMAT WORKSHOP -->
      <div class="col">
        <div class="accordion-item shadow rounded border">
          <h2 class="accordion-header" id="addressHeading">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#addressCollapse">
              Alamat Workshop
            </button>
          </h2>
          <div id="addressCollapse" class="accordion-collapse collapse" data-bs-parent="#accordionLaundry">
            <div class="accordion-body">
              <p><strong>Laundry Express</strong><br>
              Jl. Raya Tajur No 58<br>
              Kota Bogor, Jawa Barat<br>
              Telp: (0251) 8573829<br>
              Buka: 24 Jam</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const itemOptions = {
    linen: [
      'Bed Sheet Double - Rp 2.500',
      'Bed Sheet Single - Rp 2.400',
      'Duvet Cover Double - Rp 5.000',
      'Duvet Cover Single - Rp 4.700',
      'Pillow Case - Rp 1.200',
      'Bath Towel - Rp 2.500',
      'Hand Towel - Rp 1.500',
      'Face Towel - Rp 1.100',
      'Pool Towel - Rp 3.000',
      'Blanket Double - Rp 7.000',
      'Treatment/Spotting (2x harga)'
    ],
    uniform: [
      'Shirt - Rp 7.000',
      'Trouser - Rp 7.000',
      'Jas / Jacket - Rp 9.000',
      'Skirt (Short) - Rp 5.100',
      'Skirt (Long) - Rp 5.600',
      'Cook Jacket - Rp 7.300',
      'Apron Kitchen - Rp 3.000',
      'T-shirt - Rp 7.000',
      'Neck Tie - Rp 4.500',
      'Safari Shirt - Rp 13.000',
      'Treatment/Spotting (2x harga)'
    ],
    satuan: [
      'Atasan (Kemeja/Blouse/Batik) - Rp 25.000',
      'Bawahan (Rok/Jeans/Celana) - Rp 18.000',
      'Luaran (Jaket/Hoodie) - Rp 30.000',
      'Jas (Blazer/Mantel) - Rp 50.000',
      'Jas Setelan - Rp 70.000',
      'Dress (Long Dress/Baju Muslim) - Rp 25.000',
      'Gaun Panjang (Gaun Pesta/Variasi) - Rp 50.000',
      'Kebaya - Rp 30.000',
      'Alat Ibadah (Mukena/Sajadah) - Rp 25.000'
    ],
    beddings: [
      'Pillow - Rp 20.000',
      'Pillowcase - Rp 25.000',
      'Sprei Single - Rp 15.000',
      'Sprei Double - Rp 25.000',
      'Selimut Single - Rp 15.000',
      'Selimut Double - Rp 25.000',
      'Bed Cover Single - Rp 23.000',
      'Bed Cover Double - Rp 32.000',
      'Paket Bedding Single - Rp 35.000',
      'Paket Bedding Double - Rp 50.000'
    ],
    other: [
      'Handuk - Rp 15.000',
      'Dompet Non Leather Kecil - Rp 25.000',
      'Dompet Non Leather Besar - Rp 40.000',
      'Dompet Leather Kecil - Rp 30.000',
      'Dompet Leather Besar - Rp 45.000',
      'Atasan (Kemeja/Batik) - Rp 25.000',
      'Bawahan (Rok/Jeans) - Rp 18.000',
      'Luaran (Jaket/Hoodie) - Rp 30.000',
      'Jas - Rp 50.000',
      'Jas Setelan - Rp 70.000',
      'Dress - Rp 25.000',
      'Gaun Pesta - Rp 50.000',
      'Kebaya - Rp 30.000',
      'Alat Ibadah - Rp 25.000'
    ],
    kiloan: [
      'Cuci Kering Lipat - Rp 7.000/kg',
      'Cuci Kering Gosok (3 Hari) - Rp 9.000/kg',
      'Cuci Kering Gosok (1 Hari) - Rp 12.000/kg',
      'Cuci Kering Gosok (12 Jam) - Rp 18.000/kg',
      'Cuci Kering Gosok (6 Jam) - Rp 22.000/kg',
      'Setrika Kiloan Reguler (2 Hari) - Rp 7.000/kg',
      'Setrika Kiloan Express (1 Hari) - Rp 9.000/kg'
    ],
    tas_sepatu: [
      'Sepatu Nylon / Canvas - Rp 45.000',
      'Sepatu Putih - Rp 55.000',
      'Sepatu Wanita - Rp 45.000',
      'Suede / Leather - Rp 100.000',
      'Sandal - Rp 25.000',
      'Unyellowing - Rp 120.000',
      'Tas Non Leather Kecil - Rp 30.000',
      'Tas Non Leather Sedang - Rp 40.000',
      'Tas Non Leather Besar - Rp 50.000',
      'Tas Leather Kecil - Rp 75.000',
      'Tas Leather Sedang - Rp 100.000',
      'Tas Leather Besar - Rp 150.000'
    ],
    membership: [
      'Marquis - Rp 150.000',
      'Prince - Rp 250.000',
      'Duke - Rp 375.000',
      'King - Rp 500.000'
    ]
  };

  const itemsNeedQuantity = [
    'Bed Sheet', 'Duvet Cover', 'Pillow Case', 'Bath Towel', 'Hand Towel', 'Face Towel', 'Pool Towel', 'Blanket',
    'Shirt', 'Trouser', 'Jas', 'Skirt', 'Cook Jacket', 'Apron Kitchen', 'T-shirt', 'Neck Tie', 'Safari Shirt',
    'Cuci Kering', 'Setrika Kiloan', 'Sepatu', 'Tas', 'Marquis', 'Prince', 'Duke', 'King'
  ];

  function updateItems() {
    const category = document.getElementById('category').value;
    const itemSelect = document.getElementById('item');
    const quantityGroup = document.getElementById('quantity-group');

    // Reset item select
    itemSelect.innerHTML = '<option value="">-- Pilih Item --</option>';
    quantityGroup.classList.add('d-none');

    if (category && itemOptions[category]) {
      itemOptions[category].forEach(item => {
        const option = document.createElement('option');
        option.value = item;
        option.textContent = item;
        itemSelect.appendChild(option);
      });
    }
  }

  function checkQuantityRequired() {
    const itemSelect = document.getElementById('item');
    const quantityGroup = document.getElementById('quantity-group');
    const selectedItem = itemSelect.value;

    const showQty = itemsNeedQuantity.some(keyword => selectedItem.includes(keyword));
    if (showQty) {
      quantityGroup.classList.remove('d-none');
    } else {
      quantityGroup.classList.add('d-none');
    }
  }

  document.addEventListener('DOMContentLoaded', function() {
    // Initialize category change event
    document.getElementById('category').addEventListener('change', updateItems);

    // Initialize item change event
    document.getElementById('item').addEventListener('change', checkQuantityRequired);
  });
</script>
@endsection
