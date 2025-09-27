# Magento 2 CLP Information Display Module

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![Magento 2.4](https://img.shields.io/badge/Magento-2.4.x-orange.svg)](https://magento.com/)
[![PHP 8.1+](https://img.shields.io/badge/PHP-8.1%2B-blue.svg)](https://php.net/)

A professional Magento 2 module that displays CLP (Classification, Labelling and Packaging) regulation compliance information on product detail pages for chemical and hazardous products.

## 🚀 Features

- ✅ **H-Phrases (Hazard Statements)** - Multi-select dropdown with predefined options
- ✅ **P-Phrases (Precautionary Statements)** - Multi-select dropdown with safety instructions  
- ✅ **Signal Words** - "Danger" / "Warning" / "Caution" selection
- ✅ **GHS Pictograms** - Support for standard hazard symbols
- ✅ **Responsive Design** - Mobile-friendly display
- ✅ **Multi-language Support** - Translation-ready
- ✅ **Easy Setup** - Automatic attribute creation during installation

## 📦 Installation

### Via Composer (Recommended)

```bash
composer require yourcompany/magento2-clp-information
php bin/magento module:enable YourCompany_ClpInformation
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento cache:flush
```

### Manual Installation

1. Download and extract the module to `app/code/YourCompany/ClpInformation`
2. Run the installation commands above

## ⚙️ Configuration

### 1. Product Attributes
After installation, the following attributes will be automatically created:

- **CLP H-Phrases**: Multi-select field for hazard statements
- **CLP P-Phrases**: Multi-select field for precautionary statements  
- **CLP Signal Word**: Dropdown for danger level indication

### 2. Product Configuration

1. Go to **Catalog > Products** in Magento Admin
2. Edit any product that requires CLP information
3. Scroll to the CLP attributes section
4. Select applicable H-phrases, P-phrases, and signal words
5. Save the product

### 3. Frontend Display

The CLP information block will automatically appear on product detail pages for products with configured CLP data.

## 🎨 Customization

### Template Override

Copy the template file to your theme:
```
app/design/frontend/[Vendor]/[Theme]/YourCompany_ClpInformation/templates/product/view/clp_information.phtml
```

### CSS Customization

Add custom styles to your theme's CSS:
```css
.clp-information-block {
    border: 2px solid #ff6b35;
    padding: 20px;
    background-color: #fff9f5;
}
```

### Adding Custom H/P-Phrases

Extend the source models in:
- `Model/Config/Source/HPhrases.php`
- `Model/Config/Source/PPhrases.php`

## 📋 Supported H-Phrases

**Default H-Phrases included:**
- H301 - Toxic if swallowed / Giftig bei Verschlucken
- H302 - Harmful if swallowed / Gesundheitsschädlich bei Verschlucken  
- H315 - Causes skin irritation / Verursacht Hautreizungen
- H319 - Causes serious eye irritation / Verursacht schwere Augenreizung
- H335 - May cause respiratory irritation / Kann die Atemwege reizen
- H412 - Harmful to aquatic life / Schädlich für Wasserorganismen

## 📋 Supported P-Phrases

**Default P-Phrases included:**
- P102 - Keep out of reach of children / Darf nicht in die Hände von Kindern gelangen
- P264 - Wash thoroughly after handling / Nach Gebrauch gründlich waschen
- P280 - Wear protective gloves/clothing / Schutzhandschuhe/Schutzkleidung tragen
- P301+P310 - If swallowed: Call poison center / Bei Verschlucken: Giftinformationszentrum anrufen

## 🔧 Requirements

- **Magento**: 2.4.0 or higher
- **PHP**: 8.1 or higher
- **MySQL**: 5.7 or higher / MariaDB 10.2 or higher

## 📱 Screenshots

### Admin Configuration
![Admin Screenshot](docs/images/admin-config.png)

### Frontend Display  
![Frontend Screenshot](docs/images/frontend-display.png)

## 🧪 Testing

Run unit tests:
```bash
php bin/magento dev:tests:run unit YourCompany_ClpInformation
```

## 🤝 Contributing

1. Fork this repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🆘 Support

- **Documentation**: [Wiki Pages](../../wiki)
- **Issues**: [GitHub Issues](../../issues)
- **Discussions**: [GitHub Discussions](../../discussions)
- **Email**: support@yourcompany.com

## 🏢 About CLP Regulation

The CLP Regulation (EC) No 1272/2008 ensures that hazards presented by chemicals are clearly communicated to workers and consumers in the European Union. This module helps Magento store owners comply with these requirements.

**⚠️ Disclaimer**: This module is provided as-is. Users are responsible for ensuring compliance with local regulations and laws.

## 🔄 Changelog

### Version 1.0.0
- Initial release
- Basic H/P-phrases support
- Signal word functionality
- Frontend display block

---

**Made with ❤️ for the Magento community**

If this module helped you, please ⭐ star this repository!
