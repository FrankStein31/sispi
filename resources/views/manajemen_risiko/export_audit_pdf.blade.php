<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Audit Report - {{ $peta->kode_regist }}</title>
    <style>
        @page {
            margin: 10mm;
            size: A4;
        }

        body {
            font-family: "Times New Roman", Times, serif;
            font-size: 11px;
            line-height: 1.3;
            margin: 0;
            padding: 0;
            color: #000;
        }

        .header {
            text-align: center;
            margin-bottom: 8px;
            padding-bottom: 3px;
        }

        .header h1 {
            font-size: 12px;
            font-weight: bold;
            margin: 0 0 2px 0;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            text-decoration: underline;
        }

        .header p {
            font-size: 11px;
            margin: 0;
            font-weight: bold;
            line-height: 1.2;
        }

        .header p:last-child {
            margin-bottom: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 5px;
        }

        table td {
            padding: 3px 5px;
            border: 1px solid #000;
            vertical-align: top;
            font-size: 10px;
            line-height: 1.2;
        }

        .label {
            font-weight: bold;
            font-size: 10px;
            white-space: nowrap;
            padding-right: 0;
        }

        .value {
            font-size: 10px;
        }

        .header-row td {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: center;
            padding: 4px;
            font-size: 10px;
        }

        .level-high {
            background-color: #FFA500;
            color: #000;
            font-weight: bold;
            padding: 2px 15px;
            display: inline-block;
            font-size: 10px;
            border-radius: 2px;
            text-transform: uppercase;
        }

        .level-extreme {
            background-color: #FF0000;
            color: #fff;
            font-weight: bold;
            padding: 2px 15px;
            display: inline-block;
            font-size: 10px;
            border-radius: 2px;
            text-transform: uppercase;
        }

        .level-moderate {
            background-color: #FFFF00;
            color: #000;
            font-weight: bold;
            padding: 2px 15px;
            display: inline-block;
            font-size: 10px;
            border-radius: 2px;
            text-transform: uppercase;
        }

        .level-low {
            background-color: #90EE90;
            color: #000;
            font-weight: bold;
            padding: 2px 15px;
            display: inline-block;
            font-size: 10px;
            border-radius: 2px;
            text-transform: uppercase;
        }

        .residual-extreme {
            background-color: #FF0000;
            color: #fff;
            font-weight: bold;
            padding: 2px 15px;
            display: inline-block;
            font-size: 10px;
            border-radius: 2px;
        }

        .residual-high {
            background-color: #FFA500;
            color: #000;
            font-weight: bold;
            padding: 2px 15px;
            display: inline-block;
            font-size: 10px;
            border-radius: 2px;
        }

        .residual-moderate {
            background-color: #FFFF00;
            color: #000;
            font-weight: bold;
            padding: 2px 15px;
            display: inline-block;
            font-size: 10px;
            border-radius: 2px;
        }

        .residual-low {
            background-color: #90EE90;
            color: #000;
            font-weight: bold;
            padding: 2px 15px;
            display: inline-block;
            font-size: 10px;
            border-radius: 2px;
        }

        .table-content {
            font-size: 9.5px;
            line-height: 1.4;
            text-align: justify;
            padding: 3px;
        }

        .table-content strong {
            font-weight: bold;
            color: #000;
        }

        .signature-section {
            margin-top: 10px;
            font-size: 10px;
            width: 100%;
        }

        .signature-container {
            width: 100%;
            display: table;
        }

        .signature-left {
            display: table-cell;
            width: 35%;
            vertical-align: bottom;
            padding-bottom: 0;
            text-align: left;
            padding-left: 10px;
        }

        .signature-right {
            display: table-cell;
            width: 65%;
            text-align: right;
            vertical-align: top;
            padding-right: 60px;
        }

        .signature-space {
            height: 40px;
            border-bottom: 1px solid #000;
            margin-top: 5px;
            width: 200px;
            display: inline-block;
        }

        .no-border-middle {
            border-left: 0;
            border-right: 0;
            border-top: 1px solid #000;
            border-bottom: 1px solid #000;
            width: 0.5%;
            padding: 0;
            background-color: transparent;
        }

        .text-bold {
            font-weight: bold;
        }

        .text-underline {
            text-decoration: underline;
        }

        .red-text {
            color: #FF0000;
            font-weight: bold;
        }

        /* Styling untuk kolom yang lebih lebar */
        .col-pengendalian {
            width: 30%;
        }

        .col-mitigasi {
            width: 35%;
        }

        .col-komentar {
            width: 35%;
        }

        /* Styling khusus untuk header */
        .section-title {
            font-weight: bold;
            text-align: center;
            margin: 5px 0;
            font-size: 11px;
        }

        /* Menambahkan border tebal pada tabel utama */
        .main-table {
            border: 2px solid #000;
        }

        /* Styling untuk isi tabel 3 kolom */
        .three-col-table td {
            height: 180px;
            vertical-align: top;
            padding: 5px;
        }

        /* Styling untuk kolom komentar */
        .komentar-item {
            margin-bottom: 8px;
        }

        .komentar-item strong {
            display: block;
            margin-bottom: 2px;
        }

        /* Penyesuaian untuk pernyataan risiko */
        .risk-statement {
            line-height: 1.4;
            text-align: justify;
            padding: 3px 0;
        }

        /* Styling untuk tanda tangan */
        .signature-line {
            margin-top: 5px;
            border-top: 1px solid #000;
            width: 80%;
            display: inline-block;
        }

        .unit-name {
            font-weight: bold;
            text-decoration: underline;
            margin-top: 25px;
            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>LEMBAR MONITORING DAN EVALUASI MANAJEMEN RISIKO UNIT</h1>
        <p>SATUAN PENGAWAS INTERNAL</p>
        <p>POLITEKNIK NEGERI MALANG</p>
    </div>

    <table class="main-table">
        <!-- Baris 1: UNIT & PEMONEV -->
        <tr>
            <td width="15%" class="label">UNIT</td>
            <td width="34.5%" class="value">{{ $peta->jenis ?? '-' }}</td>
            <td class="no-border-middle"></td>
            <td width="15%" class="label">PEMONEV</td>
            <td width="34.5%" class="value">{{ $hasilAudit->nama_pemonev ?? ($user->name ?? '-') }}</td>
        </tr>

        <!-- Baris 2: KODE RISIKO & TAHUN ANGGARAN -->
        <tr>
            <td class="label">KODE RISIKO</td>
            <td class="value">{{ $peta->kode_regist ?? '-' }}</td>
            <td class="no-border-middle"></td>
            <td class="label">Tahun Anggaran KEGIATAN</td>
            <td class="value">{{ $hasilAudit->tahun_anggaran ?? date('Y') }}</td>
        </tr>

        <!-- Baris 3: KEGIATAN -->
        <tr>
            <td class="label">KEGIATAN</td>
            <td colspan="4" class="value risk-statement">
                {{ $hasilAudit->kegiatan ?? ($peta->kegiatan->judul ?? ($peta->judul ?? '-')) }}
            </td>
        </tr>

        <!-- Baris 4: PERNYATAAN RISIKO -->
        <tr>
            <td class="label" style="line-height: 1.2;">PERNYATAAN<br>RISIKO</td>
            <td colspan="4" class="value risk-statement">
                {{ $peta->pernyataan ?? '-' }}
            </td>
        </tr>

        <!-- Baris 5: LEVEL RISIKO & RISIKO RESIDUAL -->
        <tr>
            <td class="label">LEVEL RISIKO</td>
            <td>
                @php
                    $levelValue = strtoupper($hasilAudit->level_risiko ?? ($levelText ?? 'LOW'));
                    $levelClass = 'level-low';
                    if ($levelValue == 'EXTREME' || $levelValue == 'EKSTREM') {
                        $levelClass = 'level-extreme';
                    } elseif ($levelValue == 'HIGH' || $levelValue == 'TINGGI') {
                        $levelClass = 'level-high';
                    } elseif ($levelValue == 'MODERATE' || $levelValue == 'SEDANG') {
                        $levelClass = 'level-moderate';
                    }
                @endphp
                <span class="{{ $levelClass }}">{{ $levelValue }}</span>
            </td>
            <td class="no-border-middle"></td>
            <td class="label">RISIKO RESIDUAL</td>
            <td>
                @php
                    $residualValue = $hasilAudit->risiko_residual ?? ($residualText ?? 'Low');
                    $residualClass = 'residual-low';
                    if (stripos($residualValue, 'extreme') !== false || stripos($residualValue, 'ekstrem') !== false) {
                        $residualClass = 'residual-extreme';
                    } elseif (
                        stripos($residualValue, 'high') !== false ||
                        stripos($residualValue, 'tinggi') !== false
                    ) {
                        $residualClass = 'residual-high';
                    } elseif (
                        stripos($residualValue, 'moderate') !== false ||
                        stripos($residualValue, 'sedang') !== false
                    ) {
                        $residualClass = 'residual-moderate';
                    }
                @endphp
                <span class="{{ $residualClass }}">{{ $residualValue }}</span>
            </td>
        </tr>

        <!-- Baris 6: TABLE 3 KOLOM - PENGENDALIAN, MITIGASI, KOMENTAR -->
        <tr class="header-row">
            <td colspan="2" class="col-pengendalian">PENGENDALIAN</td>
            <td colspan="2" class="col-mitigasi">MITIGASI RISIKO</td>
            <td class="col-komentar">KOMENTAR</td>
        </tr>
        <tr class="three-col-table">
            <td colspan="2" class="table-content">
                @if ($hasilAudit && $hasilAudit->pengendalian)
                    {{ $hasilAudit->pengendalian }}
                @else
                    <em>-</em>
                @endif
            </td>
            <td colspan="2" class="table-content">
                @if ($hasilAudit && $hasilAudit->mitigasi)
                    <div class="red-text">Menerima Risiko</div><br>
                    {{ $hasilAudit->mitigasi }}

                    @if ($hasilAudit->status_konfirmasi_auditee || $hasilAudit->status_konfirmasi_auditor)
                        <br><br>
                        <div><strong>Status Konfirmasi</strong></div>
                        @if ($hasilAudit->status_konfirmasi_auditee)
                            <div><strong>Auditee:</strong> {{ $hasilAudit->status_konfirmasi_auditee }}</div>
                        @endif
                        @if ($hasilAudit->status_konfirmasi_auditor)
                            <div><strong>Auditor:</strong> {{ $hasilAudit->status_konfirmasi_auditor }}</div>
                        @endif
                    @endif
                @else
                    <em>-</em>
                @endif
            </td>
            <td class="table-content">
                @if ($hasilAudit)
                    @if ($hasilAudit->komentar_1)
                        <div class="komentar-item">
                            <strong>1. Sentralisasi Repositori Bukti:</strong><br>
                            {{ $hasilAudit->komentar_1 }}
                        </div>
                    @endif

                    @if ($hasilAudit->komentar_2)
                        <div class="komentar-item">
                            <strong>2. Finalisasi LKPS & Cross-Check:</strong><br>
                            {{ $hasilAudit->komentar_2 }}
                        </div>
                    @endif

                    @if ($hasilAudit->komentar_3)
                        <div class="komentar-item">
                            <strong>3. Koordinasi Khusus Keuangan:</strong><br>
                            {{ $hasilAudit->komentar_3 }}
                        </div>
                    @endif

                    @if (!$hasilAudit->komentar_1 && !$hasilAudit->komentar_2 && !$hasilAudit->komentar_3)
                        <em>-</em>
                    @endif
                @else
                    <em>Data audit belum diisi</em>
                @endif
            </td>
        </tr>
    </table>

    <div class="signature-section">
        <div class="signature-container">
            <div class="signature-left">
                <div style="margin-top: 40px;">
                    <div class="unit-name">{{ $peta->jenis ?? 'D-III Akuntansi PSDKU Kediri-1' }}</div><br>
                    <span>NIP. {{ $hasilAudit->auditor->nip ?? '197412082005011001' }}</span>
                </div>
            </div>
            <div class="signature-right">
                <div style="text-align: right;">
                    <span>Malang,
                        {{ $hasilAudit->created_at ? $hasilAudit->created_at->format('d/m/Y') : date('d/m/Y') }}</span><br>
                    <span class="text-bold">Pemonev</span>
                    <div class="signature-space"></div>
                    <div class="text-bold text-underline" style="margin-top: 5px;">
                        {{ $hasilAudit->nama_pemonev ?? ($user->name ?? 'Usman Nurhasan, S.Kom., M.T.') }}
                    </div>
                    <span>NIP. {{ $hasilAudit->nip_pemonev ?? ($user->nip ?? '198909162014042001') }}</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
