
@php
    $products = App\Models\Product::with('category')
        ->where('status', 'active')
        ->get();

    $categories = App\Models\Category::where('status', 'active')
        ->withCount(['products' => fn($q) => $q->where('status', 'active')])
        ->get();
@endphp


<div class=" landing-banner" style="width:100% !importent">

    <div class="zb-banner ">

        {{-- Background layers --}}
        <div class="zb-dots"></div>
        <div class="zb-stripe"></div>
        <div class="zb-accent"></div>

        {{-- Main content --}}
        <div class="zb-content">

            {{-- LEFT: branding + copy + CTA --}}
            <div class="zb-left">

                <div class="zb-brand">
                    <div class="zb-logo">Z</div>
                    <div class="zb-brand-text text-white">
                        Zaroorat<span>Bazar</span>
                    </div>
                </div>

                <div class="zb-tag">✦ Pakistan's Daily Essentials Store</div>

                <h1 class="zb-title">
                    Sab Kuch<br><span>Ek Jagah.</span>
                </h1>

                <p class="zb-sub">
                    Grocery, kitchen, home &amp; daily use products —
                    delivered fresh to your doorstep. Quality you trust,
                    prices that make sense.
                </p>

                <div class="zb-btns">
                    <a href="{{ route('products') }}" class="zb-btn-main">Shop Now →</a>
                    <a href="#deals"                 class="zb-btn-sec">View Deals</a>
                </div>
            </div>

            {{-- RIGHT: category grid + stats --}}
            <div class="zb-right">

                <div class="zb-products">
                    @foreach($categories->take(6) as $cat)
                        <div class="zb-prod">
                            <span class="zb-prod-icon">
                                @if($cat->image)
                                    <img class="img-fluid rounded" src="{{ asset('storage/' . $cat->image) }}"
                                         alt="{{ $cat->name }}"
                                         style="height:30px;object-fit:contain;">
                                @else
                                    <i class="ri-image-line" style="font-size:22px;color:rgba(255,255,255,.6);"></i>
                                @endif
                            </span>
                            <div class="zb-prod-name">{{ $cat->name ?? '' }}</div>
                        </div>
                    @endforeach
                </div>

                <div class="zb-stats">
                    <div class="zb-stat">
                        <span class="zb-stat-num">500+</span>
                        <div class="zb-stat-label">Products</div>
                    </div>
                    <div class="zb-stat">
                        <span class="zb-stat-num">Fast</span>
                        <div class="zb-stat-label">Delivery</div>
                    </div>
                    <div class="zb-stat">
                        <span class="zb-stat-num">100%</span>
                        <div class="zb-stat-label">Original</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Ticker --}}
        <div class="zb-ticker">
            <span class="zb-ticker-label">Hot Deals</span>
            <div class="zb-ticker-track">
                {{-- Duplicate for seamless loop --}}
                @foreach([1,2] as $_)
                    @foreach($products as $product)
                        @php
                            $discount = $product->sale_price
                                ? round((($product->price - $product->sale_price) / $product->price) * 100)
                                : null;
                        @endphp
                        <span class="zb-ticker-item">
                            {{ $product->name }}
                            @if($discount) — {{ $discount }}% Off @endif
                        </span>
                    @endforeach
                @endforeach
            </div>
        </div>

    </div>
</div>


<style>


/* ── Banner shell ────────────────────────────────────────────── */
.zb-banner {
    background: rgba(var(--primary-rgb));
    font-family: var(--default-font-family);
    position: relative;
    width: 100%;
    overflow: hidden;
}

/* ── Decorative background layers ───────────────────────────── */
.zb-dots {
    position: absolute;
    inset: 0;
    opacity: 0.06;
    background-image: radial-gradient(circle, #fff 1px, transparent 1px);
    background-size: 28px 28px;
    pointer-events: none;
}

.zb-stripe {
    position: absolute;
    top: 0; right: 0;
    width: 55%; height: 100%;
    background: rgba(0,0,0,.18);
    clip-path: polygon(12% 0, 100% 0, 100% 100%, 0% 100%);
    pointer-events: none;
}

.zb-accent {
    position: absolute;
    top: 0; right: 0;
    width: 28%; height: 100%;
    background: rgba(var(--warning-rgb, 255,193,7), .13);
    clip-path: polygon(18% 0, 100% 0, 100% 100%, 0% 100%);
    pointer-events: none;
}

/* ── Main content row ────────────────────────────────────────── */
.zb-content {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 32px;
    /* Responsive padding via clamp — no media-query needed for padding */
    padding: clamp(24px, 5vw, 52px) clamp(20px, 5vw, 56px);
}

/* ── Left column ─────────────────────────────────────────────── */
.zb-left { flex: 1; min-width: 0; }

.zb-brand {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 12px;
}

.zb-logo {
    width: 40px; height: 40px;
    background: rgba(255,255,255,.2);
    border: 1.5px solid rgba(255,255,255,.3);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    font-weight: 800;
    color: #fff;
    flex-shrink: 0;
}

.zb-brand-text {
    font-size: clamp(18px, 3vw, 24px);
    font-weight: 700;
    letter-spacing: -.5px;
    color: #fff;
}
.zb-brand-text span { color: rgb(var(--secondary-rgb)); }

.zb-tag {
    display: inline-block;
    background: rgb(var(--secondary-rgb));
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    padding: 5px 14px;
    border-radius: 20px;
    margin-bottom: 16px;
    color: #fff;
}

.zb-title {
    font-size: clamp(22px, 4vw, 38px);
    font-weight: 700;
    color: #fff;
    line-height: 1.15;
    margin: 0 0 10px;
}
.zb-title span { color: rgb(var(--secondary-rgb)); }

.zb-sub {
    font-size: clamp(13px, 1.5vw, 15px);
    color: rgba(255,255,255,.8);
    line-height: 1.65;
    margin: 0 0 26px;
    max-width: 420px;
}

.zb-btns { display: flex; gap: 12px; flex-wrap: wrap; }

.zb-btn-main {
    background: rgb(var(--secondary-rgb));
    border: none;
    padding: 11px 26px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    white-space: nowrap;
    text-decoration: none;
    display: inline-block;
    transition: opacity .2s, transform .15s;
}
.zb-btn-main:hover { opacity: .88; transform: translateY(-1px); color: #fff; }

.zb-btn-sec {
    background: transparent;
    border: 1.5px solid rgba(255,255,255,.4);
    padding: 11px 26px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 500;
    color: rgba(255,255,255,.9);
    cursor: pointer;
    white-space: nowrap;
    text-decoration: none;
    display: inline-block;
    transition: background .2s;
}
.zb-btn-sec:hover { background: rgba(255,255,255,.12); color: #fff; }

/* ── Right column ────────────────────────────────────────────── */
.zb-right {
    display: flex;
    flex-direction: column;
    gap: 14px;
    flex-shrink: 0;
}

.zb-products {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
}

.zb-prod {
    background: rgba(255,255,255,.1);
    border: 1px solid rgba(255,255,255,.2);
    border-radius: 12px;
    padding: 14px 10px 10px;
    text-align: center;
    width: 90px;
    cursor: pointer;
    transition: background .2s, transform .15s;
}
.zb-prod:hover {
    background: rgba(255,255,255,.22);
    transform: translateY(-2px);
}

.zb-prod-icon {
    font-size: 26px;
    display: block;
    margin-bottom: 6px;
    line-height: 1;
}

.zb-prod-name {
    font-size: 11px;
    color: rgba(255,255,255,.85);
    font-weight: 500;
}

.zb-stats { display: flex; gap: 10px; }

.zb-stat {
    background: rgba(255,255,255,.1);
    border: 1px solid rgba(255,255,255,.2);
    border-radius: 8px;
    padding: 8px 14px;
    text-align: center;
    flex: 1;
}

.zb-stat-num {
    font-size: 16px;
    font-weight: 700;
    color: #fff;
    display: block;
}

.zb-stat-label {
    font-size: 10px;
    color: rgba(255,255,255,.65);
}

/* ── Ticker ──────────────────────────────────────────────────── */
.zb-ticker {
    background: rgba(0,0,0,.25);
    border-top: 1px solid rgba(255,255,255,.1);
    padding: 10px clamp(16px, 4vw, 48px);
    display: flex;
    align-items: center;
    gap: 12px;
    overflow: hidden;
    position: relative;
    z-index: 2;
}

.zb-ticker-label {
    background: rgb(var(--secondary-rgb));
    font-size: 10px;
    font-weight: 700;
    text-transform: uppercase;
    padding: 3px 10px;
    border-radius: 4px;
    white-space: nowrap;
    letter-spacing: .8px;
    color: #fff;
    flex-shrink: 0;
}

.zb-ticker-track {
    display: flex;
    gap: 40px;
    animation: zb-tick 26s linear infinite;
    white-space: nowrap;
}

.zb-ticker-item {
    font-size: 13px;
    color: rgba(255,255,255,.8);
}
.zb-ticker-item::before {
    content: "●";
    margin-right: 8px;
    color: rgba(255,255,255,.45);
    font-size: 10px;
}

@keyframes zb-tick {
    0%   { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

/* ══════════════════════════════════════════════════════════════
   RESPONSIVE BREAKPOINTS
   ══════════════════════════════════════════════════════════════ */

/* ── Tablet landscape (≤1199px) ─── */
@media (max-width: 1199.98px) {
    .zb-prod { width: 80px; }
    .zb-sub  { max-width: 340px; }
}

/* ── Tablet portrait (≤991px) ──── */
@media (max-width: 991.98px) {
    .zb-content {
        gap: 20px;
    }
    .zb-prod  { width: 74px; }
    .zb-right { gap: 10px; }
    .zb-stat  { padding: 7px 10px; }
}

/* ── Large mobile / small tablet (≤767px) ── */
@media (max-width: 767.98px) {
    /* Stack left and right vertically */
    .zb-content {
        flex-direction: column;
        align-items: flex-start;
        gap: 24px;
    }

    /* Right takes full width; products go into a single row */
    .zb-right {
        width: 100%;
        gap: 10px;
    }

    .zb-products {
        grid-template-columns: repeat(6, 1fr);
        gap: 8px;
    }

    .zb-prod {
        width: auto;          /* fill grid cell */
        padding: 10px 6px 8px;
    }

    /* Hide diagonal stripes on mobile — cleaner look */
    .zb-stripe,
    .zb-accent { display: none; }

    .zb-sub { max-width: 100%; }

    .zb-stats { gap: 8px; }
}

/* ── Mobile (≤575px) ─────────────── */
@media (max-width: 575.98px) {
    .zb-products {
        grid-template-columns: repeat(3, 1fr);
        gap: 8px;
    }

    .zb-prod { width: auto; }

    .zb-btns { gap: 8px; }

    .zb-btn-main,
    .zb-btn-sec {
        padding: 10px 18px;
        font-size: 13px;
        flex: 1;
        text-align: center;
    }

    .zb-stats { gap: 6px; }
    .zb-stat  { padding: 6px 8px; }
    .zb-stat-num { font-size: 14px; }
}

/* ── Small mobile (≤390px) ──────── */
@media (max-width: 390px) {
    .zb-logo        { width: 34px; height: 34px; font-size: 17px; }
    .zb-brand-text  { font-size: 18px; }
    .zb-prod-name   { font-size: 9px; }
    .zb-stat-num    { font-size: 13px; }
    .zb-stat-label  { font-size: 9px; }
}
</style>