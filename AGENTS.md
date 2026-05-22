# WARP.md - Working AI Reference for PohodaSQL

## Project Overview
**Type**: PHP Project/Debian Package
**Purpose**: PohodaSQL
**Status**: Active
**Repository**: git@github.com:Spoje-NET/PohodaSQL.git

## Key Technologies
- PHP
- Composer
- Debian Packaging

## Architecture & Structure
```
PohodaSQL/
├── src/           # Source code
├── tests/         # Test files
├── docs/          # Documentation
└── ...
```

## Development Workflow

### Prerequisites
- Development environment setup
- Required dependencies

### Setup Instructions
```bash
# Clone the repository
git clone git@github.com:Spoje-NET/PohodaSQL.git
cd PohodaSQL

# Install dependencies
composer install
```

### Build & Run
```bash
dpkg-buildpackage -b -uc
```

### Testing
```bash
composer test
```

## Key Concepts
- **Main Components**: Core functionality and modules
- **Configuration**: Configuration files and environment variables
- **Integration Points**: External services and dependencies

## Common Tasks

### Development
- Review code structure
- Implement new features
- Fix bugs and issues

### Deployment
- Build and package
- Deploy to target environment
- Monitor and maintain

## Troubleshooting
- **Common Issues**: Check logs and error messages
- **Debug Commands**: Use appropriate debugging tools
- **Support**: Check documentation and issue tracker

## Additional Notes
- Project-specific conventions
- Development guidelines
- Related documentation
