import { useEffect, useState } from "react";
import api from "../api/axios";
import "bootstrap/dist/css/bootstrap.min.css";
import { Table, Container, Button, Form, Navbar, Nav } from "react-bootstrap";
import { toast, ToastContainer } from "react-toastify"
import { useNavigate, Link } from "react-router-dom";

const Products = () => {
  const [products, setProducts] = useState([]);
  const [search, setSearch] = useState("");
  const [categories, setCategories] = useState([]);
  const [selectedCategory, setSelectedCategory] = useState("");
  const [currentPage, setCurrentPage] = useState(1);
  const [totalPages, setTotalPages] = useState(1);
  const [loading, setLoading] = useState(true);
  const navigate = useNavigate();

  const getToken = () => localStorage.getItem("token");

  const fetchCategories = async () => {
    try {
      const response = await api.get("/categories", {
        headers: {
          Authorization: `Bearer ${getToken()}`,
        },
      });
      
      setCategories(Array.isArray(response.data) ? response.data : []); 
    } catch (error) {
      console.error("Erro ao buscar categorias:", error);
    }
  };

  const fetchProducts = async () => {
    const token = getToken();
    try {
        const response = await api.get(`/products?page=${currentPage}`, {
            headers: {
                Authorization: `Bearer ${token}`,
            },
        });     
        setProducts(response.data.data);
        setTotalPages(response.data.last_page);
    } catch (error) {
        console.error("Erro ao buscar produtos:", error);
        toast.error("Erro ao buscar produtos.");
    } finally {
        setLoading(false);
    }
};

  useEffect(() => {
    const token = getToken();
    if (!token) {
        toast.error("Você não tem permissão", {
          autoClose: 3000,
        });
        return navigate("/")
    };
    fetchCategories();
    fetchProducts();
  }, [currentPage]);

  const handleSearch = async (query) => {
    setSearch(query);

    if (!query) {
        fetchProducts();
      return;
    }

    const token = getToken();
    try {
      const response = await api.get(`/products/search?query=${query}`, {
        headers: { Authorization: `Bearer ${token}` },
      });      
      setProducts(response.data.data);
    } catch (error) {        
      console.error("Erro ao buscar produtos:", error);
      toast.error("Erro ao buscar produtos.");
    }
  };

  const handlePageChange = (pageNumber) => {
    if (pageNumber > 0 && pageNumber <= totalPages) {
      setCurrentPage(pageNumber);
    }
  };

  if (loading) return <div>Carregando...</div>;

  const handleLogout = () => {
    localStorage.removeItem("token");
    navigate("/");
  };

  const handlCategories = async (category_id) => {
    setSelectedCategory(category_id);

    if (!category_id) {
      fetchProducts();
      return;
    }

    const token = getToken();
    try {
      const response = await api.get(`/products/category/${category_id}`, {
        headers: { Authorization: `Bearer ${token}` },
      });
         
      setProducts(response.data.data);
    } catch (error) {        
      console.error("Erro ao buscar produtos:", error);
      toast.error("Erro ao buscar produtos.");
    }
  };

  return (
    <div className="container mt-5">
      <Navbar bg="dark" variant="dark" className="mb-5 fixed-top">
        <Container>
          <Navbar.Brand href="#home">Bem-vindo</Navbar.Brand>
          <Nav className="ms-auto">
            <Button onClick={handleLogout} variant="danger" className="mt-2">
              Sair
            </Button>
          </Nav>
        </Container>
      </Navbar>
      <ToastContainer />
      <h1 className="text-center mb-4 mt-5 pt-5">Lista de Produtos</h1>
      <Form className="mb-3">
        <Form.Control
          type="text"
          placeholder="Buscar por nome ou descrição..."
          value={search}
          onChange={(e) => handleSearch(e.target.value)}
        />
      </Form>
      {categories.length > 0 ? (
        <Form.Select onChange={(e) => handlCategories(e.target.value)} className="mb-3">
            <option value="">Todas as Categorias</option>
            {categories.map((category) => (
                <option key={category.id} value={category.id}>
                    {category.name}
                </option>
            ))}
        </Form.Select>
      ) : (
        <p>Carregando categorias...</p>
      )}
      {products.length > 0 ? (
        <div className="table-responsive">
          <table className="table table-striped table-hover">
            <thead className="table-dark">
              <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Imagem</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              {products.map((product) => (
                <tr key={product.id}>
                  <td>{product.name}</td>
                  <td>{product.description}</td>
                  <td>R$ {product.price}</td>
                  <td>
                     {product.image_url ? (
                        <img
                            src={product.image_url}
                            alt={product.name}
                            style={{ maxWidth: "100px", maxHeight: "100px" }}
                        />
                     ) : (
                        <span>Imagem Indisponível</span>
                     )}
                  </td>
                  <td>
                  <Link to={`/product/${product.detail_id}`} className="btn btn-primary btn-sm">
                    Detalhes
                  </Link>
                  </td>
                </tr>
              ))}
            </tbody>
          </table>
          <div className="d-flex justify-content-center mt-3 mb-3">
            <Button
              onClick={() => handlePageChange(currentPage - 1)}
              disabled={currentPage === 1}
              className="me-2"
            >
              Anterior
            </Button>
            <span className="align-self-center">
              {currentPage} de {totalPages}
            </span>
            <Button
              onClick={() => handlePageChange(currentPage + 1)}
              disabled={currentPage === totalPages}
              className="ms-2"
            >
              Próximo
            </Button>
          </div>
        </div>
        
      ) : (
        <p className="text-center">Nenhum produto encontrado.</p>
      )}
    </div>
  );
};

export default Products;