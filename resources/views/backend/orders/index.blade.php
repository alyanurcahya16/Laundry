@extends('layouts.backend.app')

@section('content')
<style>

    .container-xxl {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

 
    .orders-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }

    .order-card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        padding: 20px;
        transition: transform 0.3s ease;
    }
    .card-body {
    max-height: 80vh; 
    overflow-y: auto;
    padding-right: 10px;
}

    .order-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .order-card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 1px solid #e0e0e0;
    }

    .order-card-title {
        margin: 0;
        font-size: 1.1rem;
        font-weight: 600;
        color: #1e293b;
    }

    .order-card-body {
        margin-bottom: 15px;
    }

    .order-card-detail {
        display: flex;
        justify-content: space-between;
        margin-bottom: 8px;
    }

    .order-card-label {
        font-weight: 500;
        color: #64748b;
    }

    .order-card-value {
        font-weight: 500;
    }

    .order-card-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 15px;
    }

   
    .badge {
        display: inline-block;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .bg-success {
        background-color: #198754;
        color: white;
    }

    .bg-info {
        background-color: #0dcaf0;
        color: black;
    }

    .bg-warning {
        background-color: #ffc107;
        color: black;
    }

    .bg-secondary {
        background-color: #6c757d;
        color: white;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 8px 12px;
        border-radius: 4px;
        font-size: 0.875rem;
        font-weight: 500;
        cursor: pointer;
        border: none;
        transition: all 0.2s ease;
    }

    .btn-sm {
        padding: 6px 10px;
        font-size: 0.75rem;
    }

    .btn-primary {
        background-color: #0d6efd;
        color: white;
    }

    .btn-primary:hover {
        background-color: #0b5ed7;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: white;
    }

    .btn-secondary:hover {
        background-color: #5c636a;
    }


    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-menu {
        position: absolute;
        right: 0;
        top: 100%;
        z-index: 1000;
        display: none;
        min-width: 160px;
        padding: 5px 0;
        background-color: white;
        border: 1px solid rgba(0,0,0,0.15);
        border-radius: 4px;
        box-shadow: 0 6px 12px rgba(0,0,0,0.175);
    }

    .dropdown.show .dropdown-menu {
        display: block;
    }

    .dropdown-item {
        display: block;
        padding: 8px 20px;
        clear: both;
        font-weight: 400;
        color: #212529;
        text-decoration: none;
        white-space: nowrap;
        background-color: transparent;
        border: none;
        width: 100%;
        text-align: left;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    .dropdown-item:hover {
        background-color: #f8f9fa;
    }

    .move-to-history-btn {
        margin-top: 10px;
        background-color: #28a745;
        color: white;
        width: 100%;
        text-align: left;
        padding: 8px 20px;
        border: none;
        border-radius: 0 0 4px 4px;
    }

    .move-to-history-btn:hover {
        background-color: #218838;
    }

   
    .modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.5);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 1050;
    }

    .modal.show {
        display: flex;
    }

    .modal-dialog {
        max-width: 600px;
        width: 90%;
        margin: 0 auto;
    }

    .modal-content {
        background-color: white;
        border-radius: 8px;
        overflow: hidden;
    }

    .modal-header {
        padding: 20px;
        background-color: #0d6efd;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .modal-title {
        margin: 0;
        font-size: 1.25rem;
    }

    .btn-close-white {
        background: none;
        border: none;
        color: white;
        font-size: 1.25rem;
        cursor: pointer;
    }

    .modal-body {
        padding: 20px;
    }

    .modal-footer {
        padding: 15px 20px;
        border-top: 1px solid #e0e0e0;
        display: flex;
        justify-content: flex-end;
    }

   
    .detail-row {
        display: flex;
        margin-bottom: 15px;
    }

    .detail-label {
        flex: 0 0 120px;
        font-weight: 600;
        color: #64748b;
    }

    .detail-value {
        flex: 1;
    }

    .detail-items {
        background-color: #f8f9fa;
        border-radius: 4px;
        padding: 15px;
        margin-top: 10px;
    }

    
    .alert {
        padding: 15px;
        border-radius: 4px;
        margin-bottom: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .btn-close {
        background: none;
        border: none;
        cursor: pointer;
        font-size: 1rem;
        padding: 0;
    }

   
    @media (max-width: 768px) {
        .orders-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="container-xxl">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Pemesanan Laundry</h4>
        </div>
        <div class="card-body" style="max-height: 80vh; overflow-y: auto;">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                    <button type="button" class="btn-close" onclick="this.parentElement.style.display='none'"></button>
                </div>
            @endif

            <div class="orders-grid">
                @foreach($orders as $order)
                @php
                $total = 0;
                if(preg_match_all('/(\d+)x\s.*?Rp\s?([\d.,]+)/', $order->item, $matches)) {
                    foreach($matches[1] as $i => $qty) {
                        $harga = (int) str_replace(['.', ','], '', $matches[2][$i]);
                        $total += ((int) $qty) * $harga;
                    }
                }
                @endphp

                <div class="order-card">
                    <div class="order-card-header">
                        <h5 class="order-card-title">{{ $order->nama }}</h5>
                        <span class="badge bg-{{ 
                            $order->status == 'Selesai' ? 'success' :
                            ($order->status == 'Diantar' ? 'info' :
                            ($order->status == 'Diproses' ? 'warning' : 'secondary')) }}">
                            {{ $order->status }}
                        </span>
                    </div>
                    <div class="order-card-body">
                        <div class="order-card-detail">
                            <span class="order-card-label">Layanan:</span>
                            <span class="order-card-value">{{ ucfirst($order->layanan) }}</span>
                        </div>
                        <div class="order-card-detail">
                            <span class="order-card-label">Total:</span>
                            <span class="order-card-value">Rp {{ number_format($total, 0, ',', '.') }}</span>
                        </div>
                        <div class="order-card-detail">
                            <span class="order-card-label">Tanggal:</span>
                            <span class="order-card-value">{{ $order->created_at->format('d M Y') }}</span>
                        </div>
                    </div>
                    <div class="order-card-footer">
                        <button class="btn btn-primary btn-view-item" 
                                data-order-id="{{ $order->id }}"
                                data-order-data="{{ json_encode($order) }}">
                            <i class="fas fa-eye"></i> Detail
                        </button>
                        <div class="dropdown" id="dropdown-{{ $order->id }}">
                           <button class="btn btn-secondary dropdown-toggle" type="button"onclick="toggleDropdown('dropdown-{{ $order->id }}')"aria-expanded="false">
                                <i class="fas fa-cog"></i> Aksi
                            </button>
                            <div class="dropdown-menu" id="dropdown-menu-{{ $order->id }}">


                                <form action="{{ route('admin.orders.updateStatus', $order->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="Diproses">
                                    <button type="submit" class="dropdown-item">Set Diproses</button>
                                </form>
                                <form action="{{ route('admin.orders.updateStatus', $order->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="Diantar">
                                    <button type="submit" class="dropdown-item">Set Diantar</button>
                                </form>
                                <form action="{{ route('admin.orders.updateStatus', $order->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="Selesai">
                                    <button type="submit" class="dropdown-item">Set Selesai</button>
                                </form>
                                
                                @if($order->status == 'Selesai')
                                <form action="{{ route('admin.orders.moveToHistory', $order->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="move-to-history-btn">
                                        <i class="fas fa-archive"></i> Pindahkan ke History
                                    </button>
                                </form>
                                <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pesanan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="move-to-history-btn" style="background-color: #dc3545;">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="modal" id="orderDetailModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Pesanan</h5>
                <button type="button" class="btn-close-white" onclick="closeModal()">×</button>
            </div>
            <div class="modal-body">
                <div class="detail-row">
                    <div class="detail-label">Nama Pelanggan:</div>
                    <div class="detail-value" id="detailNama"></div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">No. HP:</div>
                    <div class="detail-value" id="detailTelepon"></div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Alamat:</div>
                    <div class="detail-value" id="detailAlamat"></div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Layanan:</div>
                    <div class="detail-value" id="detailLayanan"></div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Status:</div>
                    <div class="detail-value" id="detailStatus"></div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Tanggal Pesan:</div>
                    <div class="detail-value" id="detailTanggal"></div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Jumlah:</div>
                    <div class="detail-value" id="detailQuantity"></div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Total Harga:</div>
                    <div class="detail-value text-success" id="detailTotal"></div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Catatan:</div>
                    <div class="detail-value text-muted" id="detailCatatan"></div>
                </div>
                <div class="detail-row" style="align-items: flex-start;">
                    <div class="detail-label">Detail Item:</div>
                    <div class="detail-value">
                        <div class="detail-items">
                            <pre class="item-content mb-0" id="detailItem"></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeModal()">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>

    function toggleDropdown(id) {
    const dropdown = document.getElementById(id);
    const menu = dropdown.querySelector('.dropdown-menu');
    menu.classList.toggle('show');


    document.querySelectorAll('.dropdown').forEach(el => {
        if (el.id !== id) {
            const otherMenu = el.querySelector('.dropdown-menu');
            otherMenu?.classList.remove('show');
        }
    });

    event.stopPropagation(); 
}


    document.addEventListener('click', function(e) {
        if (!e.target.closest('.dropdown')) {
            document.querySelectorAll('.dropdown').forEach(el => {
                el.classList.remove('show');
            });
        }
    });

    document.querySelectorAll('.dropdown-menu').forEach(menu => {
        menu.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    });


    function openModal() {
        document.getElementById('orderDetailModal').classList.add('show');
    }

    function closeModal() {
        document.getElementById('orderDetailModal').classList.remove('show');
    }

    
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.btn-view-item').forEach(button => {
            button.addEventListener('click', function() {
                const orderData = JSON.parse(this.getAttribute('data-order-data'));
                
             
                let total = 0;
                if(orderData.item) {
                    const matches = orderData.item.match(/Rp\s?([\d.,]+)/g);
                    if(matches) {
                        matches.forEach(match => {
                            total += parseInt(match.replace(/[^\d]/g, ''));
                        });
                    }
                }
                total *= (orderData.quantity || 1);
                
               
                document.getElementById('detailNama').textContent = orderData.nama || '-';
                document.getElementById('detailTelepon').textContent = orderData.telepon || '-';
                document.getElementById('detailAlamat').textContent = orderData.alamat || '-';
                document.getElementById('detailTanggal').textContent = orderData.created_at ? new Date(orderData.created_at).toLocaleString('id-ID') : '-';
                document.getElementById('detailLayanan').textContent = orderData.layanan ? orderData.layanan.charAt(0).toUpperCase() + orderData.layanan.slice(1) : '-';
                document.getElementById('detailStatus').innerHTML = `<span class="badge bg-${
                    orderData.status == 'Selesai' ? 'success' :
                    orderData.status == 'Diantar' ? 'info' :
                    orderData.status == 'Diproses' ? 'warning' : 'secondary'
                }">${orderData.status || '-'}</span>`;
                document.getElementById('detailCatatan').textContent = orderData.catatan || 'Tidak ada catatan';
                document.getElementById('detailItem').textContent = orderData.item || 'Tidak ada item';
                document.getElementById('detailQuantity').textContent = orderData.quantity || '1';
                document.getElementById('detailTotal').textContent = 'Rp ' + total.toLocaleString('id-ID');
                
              
                openModal();
            });
        });

       
        document.querySelectorAll('.dropdown-item[type="submit"]').forEach(button => {
            button.addEventListener('click', function() {
                setTimeout(() => {
                    window.location.reload();
                }, 500);
            });
        });
    });
</script>
@endsection