fetch('products.json')
  .then(res => res.json())
  .then(products => {
    const container = document.getElementById('product-list');
    products.forEach(product => {
      const card = document.createElement('div');
      card.className = 'card';
      card.innerHTML = `
        <h2>${product.name}</h2>
        <p>Price per Ton: ₹${product.price}</p>
        <p>Min Order: ${product.min_qty} tons</p>
        <p>Max Order: ${product.max_qty} tons</p>
      `;
      container.appendChild(card);
    });
  });
