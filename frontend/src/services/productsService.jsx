import api from "../api/axios";

export const getProducts = async (currentPage, token) => {
    const response = await api.get(`/products?page=${currentPage}`, {
        headers: {
          Authorization: `Bearer ${token}`,
        },
    });
    return response;
};

export const searchProducts = async (query, token) => {
    const response = await api.get(`/products/search?query=${query}`, {
        headers: {
          Authorization: `Bearer ${token}`,
        },
    });
    return response;
}

export const getProductsByCategory = async (category_id, currentPage, token) => {
    const response = await api.get(`/products/category/${category_id}?page=${currentPage}`, {
        headers: {
          Authorization: `Bearer ${token}`,
        },
    });
    return response;
  };
