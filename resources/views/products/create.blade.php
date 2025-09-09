<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Crear Producto - Panel Admin | Alkosto</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="create-product.css" />
</head>

<body>
    <!-- Header Admin -->
    <header class="admin-header">
        <div class="container header-inner">
            <div class="logo-admin">
                <span class="logo">ALKOSTO</span>
                <span class="admin-badge">ADMIN</span>
            </div>
            <nav class="admin-nav">
                <a href="#" class="nav-link active">Productos</a>
                <a href="#" class="nav-link">Pedidos</a>
                <a href="#" class="nav-link">Usuarios</a>
                <a href="#" class="nav-link">Reportes</a>
            </nav>
            <div class="admin-actions">
                <button class="btn-notifications">🔔 <span class="notification-count">3</span></button>
                <div class="admin-profile">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80"
                        alt="Admin" />
                    <span>Admin</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Breadcrumb -->
    <nav class="breadcrumb container" aria-label="Breadcrumb">
        <a href="#">Dashboard</a>
        <span>/</span>
        <a href="#">Productos</a>
        <span>/</span>
        <span aria-current="page">Crear producto</span>
    </nav>

    <!-- Main Content -->
    <main class="container">
        <div class="page-header">
            <h1>Crear nuevo producto</h1>
            <div class="header-actions">
                <button class="btn-outline">Cancelar</button>
                <button class="btn-primary" id="saveProduct">Guardar producto</button>
            </div>
        </div>

        <form class="product-form" id="productForm">
            <div class="form-layout">
                <!-- Left Column -->
                <div class="form-main">
                    <!-- Basic Information -->
                    <div class="form-section">
                        <h2>Información básica</h2>
                        <div class="form-grid">
                            <div class="form-group full-width">
                                <label for="productName" class="form-label">Nombre del producto *</label>
                                <input type="text" id="productName" name="productName" class="form-input"
                                    placeholder="Ej: Computador Portátil Gamer HP Victus 15.6" required />
                            </div>

                            <div class="form-group">
                                <label for="brand" class="form-label">Marca *</label>
                                <select id="brand" name="brand" class="form-select" required>
                                    <option value="">Seleccionar marca</option>
                                    <option value="hp">HP</option>
                                    <option value="samsung">Samsung</option>
                                    <option value="apple">Apple</option>
                                    <option value="lg">LG</option>
                                    <option value="sony">Sony</option>
                                    <option value="asus">ASUS</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="category" class="form-label">Categoría *</label>
                                <select id="category" name="category" class="form-select" required>
                                    <option value="">Seleccionar categoría</option>
                                    <option value="computadores">Computadores</option>
                                    <option value="celulares">Celulares</option>
                                    <option value="gaming">Gaming</option>
                                    <option value="tv-audio">TV & Audio</option>
                                    <option value="electrodomesticos">Electrodomésticos</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="sku" class="form-label">SKU *</label>
                                <input type="text" id="sku" name="sku" class="form-input"
                                    placeholder="Ej: 198122718313" required />
                            </div>

                            <div class="form-group">
                                <label for="model" class="form-label">Modelo</label>
                                <input type="text" id="model" name="model" class="form-input"
                                    placeholder="Ej: fb2002la" />
                            </div>

                            <div class="form-group full-width">
                                <label for="description" class="form-label">Descripción corta</label>
                                <textarea id="description" name="description" class="form-textarea" rows="3"
                                    placeholder="Descripción breve del producto para listados..."></textarea>
                            </div>

                            <div class="form-group full-width">
                                <label for="fullDescription" class="form-label">Descripción completa</label>
                                <textarea id="fullDescription" name="fullDescription" class="form-textarea" rows="6"
                                    placeholder="Descripción detallada del producto, características, beneficios..."></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Pricing -->
                    <div class="form-section">
                        <h2>Precios</h2>
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="originalPrice" class="form-label">Precio original *</label>
                                <div class="input-with-currency">
                                    <span class="currency">$</span>
                                    <input type="number" id="originalPrice" name="originalPrice" class="form-input"
                                        placeholder="5499000" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="salePrice" class="form-label">Precio de venta</label>
                                <div class="input-with-currency">
                                    <span class="currency">$</span>
                                    <input type="number" id="salePrice" name="salePrice" class="form-input"
                                        placeholder="3499030" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="discount" class="form-label">% Descuento</label>
                                <div class="input-with-currency">
                                    <input type="number" id="discount" name="discount" class="form-input"
                                        placeholder="36" max="100" />
                                    <span class="currency">%</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="stock" class="form-label">Stock disponible *</label>
                                <input type="number" id="stock" name="stock" class="form-input"
                                    placeholder="50" required min="0" />
                            </div>
                        </div>
                    </div>

                    <!-- Technical Specifications -->
                    <div class="form-section">
                        <h2>Especificaciones técnicas</h2>
                        <div class="specs-builder">
                            <div class="specs-list" id="specsList">
                                <!-- Dynamic specs will be added here -->
                            </div>
                            <button type="button" class="btn-add-spec" id="addSpec">+ Agregar
                                especificación</button>
                        </div>
                    </div>

                    <!-- Features -->
                    <div class="form-section">
                        <h2>Características destacadas</h2>
                        <div class="features-builder">
                            <div class="features-list" id="featuresList">
                                <!-- Dynamic features will be added here -->
                            </div>
                            <button type="button" class="btn-add-feature" id="addFeature">+ Agregar
                                característica</button>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="form-sidebar">
                    <!-- Product Status -->
                    <div class="sidebar-section">
                        <h3>Estado del producto</h3>
                        <div class="form-group">
                            <label for="status" class="form-label">Estado</label>
                            <select id="status" name="status" class="form-select">
                                <option value="draft">Borrador</option>
                                <option value="active">Activo</option>
                                <option value="inactive">Inactivo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-checkbox">
                                <input type="checkbox" name="featured" />
                                <span class="checkmark"></span>
                                Producto destacado
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="form-checkbox">
                                <input type="checkbox" name="hasOffer" />
                                <span class="checkmark"></span>
                                Producto en oferta
                            </label>
                        </div>
                    </div>

                    <!-- Images -->
                    <div class="sidebar-section">
                        <h3>Imágenes del producto</h3>
                        <div class="image-upload-area" id="imageUploadArea">
                            <div class="upload-placeholder">
                                <div class="upload-icon">📷</div>
                                <p>Arrastra imágenes aquí o haz clic para seleccionar</p>
                                <input type="file" id="imageInput" accept="image/*" multiple hidden />
                                <button type="button" class="btn-upload"
                                    onclick="document.getElementById('imageInput').click()">Seleccionar
                                    imágenes</button>
                            </div>
                        </div>
                        <div class="image-preview" id="imagePreview"></div>
                    </div>

                    <!-- Financing Options -->
                    <div class="sidebar-section">
                        <h3>Opciones de financiación</h3>
                        <div class="form-group">
                            <label class="form-checkbox">
                                <input type="checkbox" name="zeroInterest" />
                                <span class="checkmark"></span>
                                0% interés disponible
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="maxInstallments" class="form-label">Máx. cuotas</label>
                            <select id="maxInstallments" name="maxInstallments" class="form-select">
                                <option value="3">3 meses</option>
                                <option value="6">6 meses</option>
                                <option value="12">12 meses</option>
                                <option value="24">24 meses</option>
                                <option value="36">36 meses</option>
                            </select>
                        </div>
                    </div>

                    <!-- SEO -->
                    <div class="sidebar-section">
                        <h3>SEO</h3>
                        <div class="form-group">
                            <label for="metaTitle" class="form-label">Meta título</label>
                            <input type="text" id="metaTitle" name="metaTitle" class="form-input"
                                placeholder="Título para buscadores" maxlength="60" />
                            <small class="form-help">Máximo 60 caracteres</small>
                        </div>
                        <div class="form-group">
                            <label for="metaDescription" class="form-label">Meta descripción</label>
                            <textarea id="metaDescription" name="metaDescription" class="form-textarea" rows="3"
                                placeholder="Descripción para buscadores" maxlength="160"></textarea>
                            <small class="form-help">Máximo 160 caracteres</small>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Preview Section -->
        <div class="preview-section">
            <div class="preview-header">
                <h2>Vista previa</h2>
                <button type="button" class="btn-outline" id="togglePreview">Mostrar vista previa</button>
            </div>
            <div class="preview-content" id="previewContent" style="display: none;">
                <!-- Product preview will be generated here -->
            </div>
        </div>
    </main>

    <!-- Success Modal -->
    <div class="modal-overlay" id="successModal" style="display: none;">
        <div class="modal">
            <div class="modal-header">
                <h3>¡Producto creado exitosamente!</h3>
                <button class="modal-close" onclick="closeModal()">&times;</button>
            </div>
            <div class="modal-body">
                <p>El producto se ha guardado y está disponible en el catálogo.</p>
            </div>
            <div class="modal-footer">
                <button class="btn-outline" onclick="closeModal()">Crear otro</button>
                <button class="btn-primary" onclick="viewProduct()">Ver producto</button>
            </div>
        </div>
    </div>

    <script>
        // Form handling
        const form = document.getElementById('productForm');
        const saveBtn = document.getElementById('saveProduct');

        // Dynamic specs
        let specCount = 0;
        document.getElementById('addSpec').addEventListener('click', () => {
            const specsList = document.getElementById('specsList');
            const specItem = document.createElement('div');
            specItem.className = 'spec-item';
            specItem.innerHTML = `
        <div class="spec-inputs">
          <input type="text" placeholder="Nombre (ej: Procesador)" class="form-input" />
          <input type="text" placeholder="Valor (ej: AMD Ryzen 5 8645H)" class="form-input" />
          <button type="button" class="btn-remove" onclick="this.parentElement.parentElement.remove()">×</button>
        </div>
      `;
            specsList.appendChild(specItem);
        });

        // Dynamic features
        document.getElementById('addFeature').addEventListener('click', () => {
            const featuresList = document.getElementById('featuresList');
            const featureItem = document.createElement('div');
            featureItem.className = 'feature-item';
            featureItem.innerHTML = `
        <div class="feature-inputs">
          <input type="text" placeholder="Característica destacada" class="form-input" />
          <button type="button" class="btn-remove" onclick="this.parentElement.parentElement.remove()">×</button>
        </div>
      `;
            featuresList.appendChild(featureItem);
        });

        // Price calculations
        const originalPrice = document.getElementById('originalPrice');
        const salePrice = document.getElementById('salePrice');
        const discount = document.getElementById('discount');

        originalPrice.addEventListener('input', calculateDiscount);
        salePrice.addEventListener('input', calculateDiscount);
        discount.addEventListener('input', calculateSalePrice);

        function calculateDiscount() {
            const original = parseFloat(originalPrice.value) || 0;
            const sale = parseFloat(salePrice.value) || 0;
            if (original && sale) {
                const discountPercent = Math.round(((original - sale) / original) * 100);
                discount.value = discountPercent > 0 ? discountPercent : '';
            }
        }

        function calculateSalePrice() {
            const original = parseFloat(originalPrice.value) || 0;
            const discountPercent = parseFloat(discount.value) || 0;
            if (original && discountPercent) {
                const sale = original - (original * discountPercent / 100);
                salePrice.value = Math.round(sale);
            }
        }

        // Image upload
        const imageInput = document.getElementById('imageInput');
        const imagePreview = document.getElementById('imagePreview');
        let uploadedImages = [];

        imageInput.addEventListener('change', handleImageUpload);

        function handleImageUpload(event) {
            const files = Array.from(event.target.files);
            files.forEach(file => {
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        uploadedImages.push({
                            file: file,
                            url: e.target.result
                        });
                        renderImagePreviews();
                    };
                    reader.readAsDataURL(file);
                }
            });
        }

        function renderImagePreviews() {
            imagePreview.innerHTML = uploadedImages.map((img, index) => `
        <div class="image-item">
          <img src="${img.url}" alt="Preview ${index + 1}" />
          <button type="button" class="btn-remove-image" onclick="removeImage(${index})">×</button>
          ${index === 0 ? '<span class="main-image-badge">Principal</span>' : ''}
        </div>
      `).join('');
        }

        function removeImage(index) {
            uploadedImages.splice(index, 1);
            renderImagePreviews();
        }

        // Form submission
        saveBtn.addEventListener('click', (e) => {
            e.preventDefault();
            if (form.checkValidity()) {
                // Simulate saving
                saveBtn.textContent = 'Guardando...';
                saveBtn.disabled = true;

                setTimeout(() => {
                    document.getElementById('successModal').style.display = 'flex';
                    saveBtn.textContent = 'Guardar producto';
                    saveBtn.disabled = false;
                }, 2000);
            } else {
                form.reportValidity();
            }
        });

        // Modal functions
        function closeModal() {
            document.getElementById('successModal').style.display = 'none';
        }

        function viewProduct() {
            alert('Redirigiendo a la vista del producto...');
            closeModal();
        }

        // Preview toggle
        document.getElementById('togglePreview').addEventListener('click', function() {
            const preview = document.getElementById('previewContent');
            if (preview.style.display === 'none') {
                preview.style.display = 'block';
                this.textContent = 'Ocultar vista previa';
                generatePreview();
            } else {
                preview.style.display = 'none';
                this.textContent = 'Mostrar vista previa';
            }
        });

        function generatePreview() {
            const productName = document.getElementById('productName').value || 'Nombre del producto';
            const originalPrice = document.getElementById('originalPrice').value || '0';
            const salePrice = document.getElementById('salePrice').value || '0';
            const discount = document.getElementById('discount').value || '0';

            document.getElementById('previewContent').innerHTML = `
        <div class="product-preview-card">
          <div class="preview-image">
            ${uploadedImages.length > 0 ?
              `<img src="${uploadedImages[0].url}" alt="Preview" />` :
              '<div class="preview-placeholder">📷<br>Sin imagen</div>'
            }
            ${discount ? `<span class="preview-badge">-${discount}%</span>` : ''}
          </div>
          <div class="preview-info">
            <h3>${productName}</h3>
            <div class="preview-prices">
              ${salePrice && salePrice !== originalPrice ?
                `<span class="preview-sale-price">$${parseInt(salePrice).toLocaleString()}</span>
                     <span class="preview-original-price">$${parseInt(originalPrice).toLocaleString()}</span>` :
                `<span class="preview-sale-price">$${parseInt(originalPrice).toLocaleString()}</span>`
              }
            </div>
          </div>
        </div>
      `;
        }
    </script>

    <style>
        :root {
            --bg: #0e0f11;
            --card: #16181c;
            --muted: #8d95a5;
            --text: #e8ecf1;
            --accent: #ff3b30;
            --success: #17b26a;
            --brand: #ff6a00;
            --line: #23262d;
            --gradient-brand: linear-gradient(90deg, #ff6a00, #ff3b30);
            --warning: #f59e0b;
        }

        * {
            box-sizing: border-box
        }

        html,
        body {
            margin: 0;
            padding: 0;
            background: var(--bg);
            color: var(--text);
            font-family: Inter, system-ui, Segoe UI, Roboto, Helvetica, Arial, sans-serif
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 16px
        }

        /* Admin Header */
        .admin-header {
            background: #0b0c0f;
            border-bottom: 1px solid var(--line);
            position: sticky;
            top: 0;
            z-index: 100
        }

        .header-inner {
            display: grid;
            grid-template-columns: auto 1fr auto;
            gap: 24px;
            align-items: center;
            padding: 12px 0
        }

        .logo-admin {
            display: flex;
            align-items: center;
            gap: 8px
        }

        .logo {
            font-weight: 800;
            letter-spacing: 1px;
            background: var(--gradient-brand);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-size: 22px
        }

        .admin-badge {
            background: var(--brand);
            color: #fff;
            font-size: 10px;
            font-weight: 700;
            padding: 2px 6px;
            border-radius: 4px
        }

        .admin-nav {
            display: flex;
            gap: 20px
        }

        .nav-link {
            color: var(--muted);
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 6px;
            transition: all .2s
        }

        .nav-link:hover,
        .nav-link.active {
            color: #fff;
            background: #1a1d23
        }

        .admin-actions {
            display: flex;
            align-items: center;
            gap: 16px
        }

        .btn-notifications {
            position: relative;
            background: transparent;
            border: 1px solid var(--line);
            color: var(--text);
            padding: 8px 12px;
            border-radius: 8px;
            cursor: pointer
        }

        .notification-count {
            position: absolute;
            top: -4px;
            right: -4px;
            background: var(--accent);
            color: #fff;
            font-size: 10px;
            padding: 2px 5px;
            border-radius: 999px
        }

        .admin-profile {
            display: flex;
            align-items: center;
            gap: 8px
        }

        .admin-profile img {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            border: 1px solid var(--line)
        }

        /* Breadcrumb */
        .breadcrumb {
            display: flex;
            gap: 8px;
            align-items: center;
            color: var(--muted);
            font-size: 13px;
            padding: 16px 0
        }

        .breadcrumb a {
            color: var(--muted);
            text-decoration: none
        }

        .breadcrumb span[aria-current] {
            color: var(--text)
        }

        /* Page Header */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px
        }

        .page-header h1 {
            font-size: 28px;
            margin: 0;
            color: #fff
        }

        .header-actions {
            display: flex;
            gap: 12px
        }

        /* Form Layout */
        .form-layout {
            display: grid;
            grid-template-columns: 1fr 300px;
            gap: 32px
        }

        .form-main {
            display: flex;
            flex-direction: column;
            gap: 24px
        }

        .form-sidebar {
            display: flex;
            flex-direction: column;
            gap: 20px
        }

        /* Form Sections */
        .form-section {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 20px
        }

        .form-section h2 {
            margin: 0 0 16px;
            font-size: 18px;
            color: #fff
        }

        .sidebar-section {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 16px
        }

        .sidebar-section h3 {
            margin: 0 0 12px;
            font-size: 16px;
            color: #fff
        }

        /* Form Elements */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 6px
        }

        .form-group.full-width {
            grid-column: 1/-1
        }

        .form-label {
            font-size: 14px;
            font-weight: 500;
            color: #fff
        }

        .form-input,
        .form-select,
        .form-textarea {
            background: #0f1115;
            border: 1px solid var(--line);
            border-radius: 8px;
            padding: 10px 12px;
            color: var(--text);
            font-size: 14px
        }

        .form-input:focus,
        .form-select:focus,
        .form-textarea:focus {
            outline: none;
            border-color: var(--brand);
            box-shadow: 0 0 0 3px rgba(255, 106, 0, .1)
        }

        .form-textarea {
            resize: vertical;
            min-height: 80px
        }

        .form-help {
            font-size: 12px;
            color: var(--muted)
        }

        /* Input with Currency */
        .input-with-currency {
            position: relative;
            display: flex;
            align-items: center
        }

        .input-with-currency .currency {
            position: absolute;
            left: 12px;
            color: var(--muted);
            font-weight: 600;
            z-index: 1
        }

        .input-with-currency input {
            padding-left: 32px
        }

        .input-with-currency .currency:last-child {
            left: auto;
            right: 12px
        }

        .input-with-currency input:has(+ .currency:last-child) {
            padding-right: 32px;
            padding-left: 12px
        }

        /* Checkboxes */
        .form-checkbox {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            font-size: 14px
        }

        .form-checkbox input {
            width: 16px;
            height: 16px;
            accent-color: var(--brand)
        }

        /* Buttons */
        .btn-primary {
            background: var(--gradient-brand);
            border: none;
            color: #fff;
            padding: 10px 16px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: transform .2s
        }

        .btn-primary:hover {
            transform: translateY(-1px)
        }

        .btn-primary:disabled {
            opacity: .5;
            transform: none;
            cursor: not-allowed
        }

        .btn-outline {
            background: transparent;
            border: 1px solid var(--line);
            color: var(--text);
            padding: 10px 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: all .2s
        }

        .btn-outline:hover {
            border-color: var(--brand);
            color: var(--brand)
        }

        .btn-add-spec,
        .btn-add-feature {
            background: transparent;
            border: 1px dashed var(--line);
            color: var(--muted);
            padding: 12px;
            border-radius: 8px;
            cursor: pointer;
            transition: all .2s;
            width: 100%
        }

        .btn-add-spec:hover,
        .btn-add-feature:hover {
            border-color: var(--brand);
            color: var(--brand)
        }

        /* Dynamic Specs and Features */
        .specs-list,
        .features-list {
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-bottom: 12px
        }

        .spec-item,
        .feature-item {
            background: #121418;
            border: 1px solid var(--line);
            border-radius: 8px;
            padding: 12px
        }

        .spec-inputs,
        .feature-inputs {
            display: grid;
            grid-template-columns: 1fr 2fr auto;
            gap: 8px;
            align-items: center
        }

        .feature-inputs {
            grid-template-columns: 1fr auto
        }

        .btn-remove {
            background: var(--accent);
            border: none;
            color: #fff;
            width: 28px;
            height: 28px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            line-height: 1
        }

        /* Image Upload */
        .image-upload-area {
            border: 2px dashed var(--line);
            border-radius: 12px;
            padding: 32px;
            text-align: center;
            transition: border-color .2s
        }

        .image-upload-area:hover {
            border-color: var(--brand)
        }

        .upload-icon {
            font-size: 48px;
            margin-bottom: 12px;
            opacity: .5
        }

        .btn-upload {
            background: transparent;
            border: 1px solid var(--line);
            color: var(--text);
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 8px
        }

        .image-preview {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 8px;
            margin-top: 12px
        }

        .image-item {
            position: relative;
            aspect-ratio: 1;
            border-radius: 8px;
            overflow: hidden
        }

        .image-item img {
            width: 100%;
            height: 100%;
            object-fit: cover
        }

        .btn-remove-image {
            position: absolute;
            top: 4px;
            right: 4px;
            background: rgba(0, 0, 0, .8);
            border: none;
            color: #fff;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            cursor: pointer
        }

        .main-image-badge {
            position: absolute;
            bottom: 4px;
            left: 4px;
            background: var(--brand);
            color: #fff;
            font-size: 10px;
            padding: 2px 6px;
            border-radius: 4px
        }

        /* Preview Section */
        .preview-section {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 20px;
            margin-top: 32px
        }

        .preview-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px
        }

        .product-preview-card {
            display: flex;
            background: #121418;
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 16px;
            gap: 16px
        }

        .preview-image {
            position: relative;
            width: 120px;
            height: 90px;
            background: #0f1115;
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .preview-image img {
            width: 100%;
            height: 100%;
            object-fit: cover
        }

        .preview-placeholder {
            color: var(--muted);
            text-align: center;
            font-size: 12px
        }

        .preview-badge {
            position: absolute;
            top: 4px;
            left: 4px;
            background: var(--accent);
            color: #fff;
            font-size: 10px;
            padding: 2px 6px;
            border-radius: 4px
        }

        .preview-info h3 {
            margin: 0 0 8px;
            font-size: 16px
        }

        .preview-prices {
            display: flex;
            gap: 8px;
            align-items: center
        }

        .preview-sale-price {
            font-size: 18px;
            font-weight: 700;
            color: #fff
        }

        .preview-original-price {
            font-size: 14px;
            color: var(--muted);
            text-decoration: line-through
        }

        /* Modal */
        .modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .8);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000
        }

        .modal {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 12px;
            width: 90%;
            max-width: 400px;
            overflow: hidden
        }

        .modal-header {
            padding: 16px 20px;
            border-bottom: 1px solid var(--line);
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .modal-header h3 {
            margin: 0;
            color: #fff
        }

        .modal-close {
            background: transparent;
            border: none;
            color: var
        }
    </style>
</body>

</html>
