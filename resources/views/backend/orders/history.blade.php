@extends('layouts.backend.app')

@section('content')
<style>
    /* Base Styles */
    .container-xxl {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    /* Card Grid Layout */
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
        justify-content: flex-end;
        align-items: center;
        margin-top: 15px;
    }

    /* Badge Styles */
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

    /* Button Styles */
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

    /* Modal Styles */
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

    /* Detail View Styles */
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

    /* Alert Styles */
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

    /* Responsive */
    @media (max-width: 768px) {
        .orders-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="container-xxl">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">History Pemesanan Laundry</h4>
        </div>
        <div class="card-body">
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
                    if(preg_match_all('/Rp\s?([\d.,]+)/', $order->item, $matches)) {
                        foreach($matches[1] as $match) {
                            $total += (int) str_replace(['.', ','], '', $match);
                        }
                    }
                    $total *= ($order->quantity ?? 1);
                @endphp
                <div class="order-card">
                    <div class="order-card-header">
                        <h5 class="order-card-title">{{ $order->nama }}</h5>
                        <span class="badge bg-success">
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
                        <div class="order-card-detail">
                            <span class="order-card-label">Dipindahkan:</span>
                            <span class="order-card-value">{{ $order->updated_at->format('d M Y H:i') }}</span>
                        </div>
                    </div>
                   <div class="order-card-footer" style="gap: 10px;">
                        <button class="btn btn-primary btn-view-item" 
                            data-order-id="{{ $order->id }}"
                            data-order-data="{{ json_encode($order) }}">
                            <i class="fas fa-eye"></i> Detail
                        </button>

                        <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus pesanan ini dari history?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-secondary">
                                <i class="fas fa-trash-alt"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- Modal Structure -->
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
                    <div class="detail-label">Dipindahkan:</div>
                    <div class="detail-value" id="detailUpdated"></div>
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
    // Modal functions
    function openModal() {
        document.getElementById('orderDetailModal').classList.add('show');
    }

    function closeModal() {
        document.getElementById('orderDetailModal').classList.remove('show');
    }

    // Handle view item button clicks
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.btn-view-item').forEach(button => {
            button.addEventListener('click', function() {
                const orderData = JSON.parse(this.getAttribute('data-order-data'));
                
                // Calculate total
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
                
                // Populate modal
                document.getElementById('detailNama').textContent = orderData.nama || '-';
                document.getElementById('detailTelepon').textContent = orderData.telepon || '-';
                document.getElementById('detailAlamat').textContent = orderData.alamat || '-';
                document.getElementById('detailTanggal').textContent = orderData.created_at ? new Date(orderData.created_at).toLocaleString('id-ID') : '-';
                document.getElementById('detailUpdated').textContent = orderData.updated_at ? new Date(orderData.updated_at).toLocaleString('id-ID') : '-';
                document.getElementById('detailLayanan').textContent = orderData.layanan ? orderData.layanan.charAt(0).toUpperCase() + orderData.layanan.slice(1) : '-';
                document.getElementById('detailStatus').innerHTML = `<span class="badge bg-success">${orderData.status || '-'}</span>`;
                document.getElementById('detailCatatan').textContent = orderData.catatan || 'Tidak ada catatan';
                document.getElementById('detailItem').textContent = orderData.item || 'Tidak ada item';
                document.getElementById('detailQuantity').textContent = orderData.quantity || '1';
                document.getElementById('detailTotal').textContent = 'Rp ' + total.toLocaleString('id-ID');
                
                // Show modal
                openModal();
            });
        });
    });
</script>
@endsection