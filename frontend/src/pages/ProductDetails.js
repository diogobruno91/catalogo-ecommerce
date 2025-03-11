import { useEffect, useState } from "react";
import { useParams, useNavigate } from "react-router-dom";
import api from "../api/axios";
import { Container, Button, Card } from "react-bootstrap";
import { toast } from "react-toastify";

const ProductDetails = () => {
  const { id } = useParams();
  const [product, setProduct] = useState(null);
  const navigate = useNavigate();

  const getToken = () => localStorage.getItem("token");

  const fetchProductDetails = async () => {
    try {
      const response = await api.get(`/details/${id}`, {
        headers: {
          Authorization: `Bearer ${getToken()}`,
        },
      });
      
      setProduct(response.data);
    } catch (error) {
      console.error("Erro ao buscar detalhes do produto:", error);
      toast.error("Erro ao carregar detalhes do produto.");
    }
  };

  useEffect(() => {
    fetchProductDetails();
  }, [id]);

  if (!product) return <p className="text-center">Carregando detalhes...</p>;

  return (
    <Container className="mt-5">
        <h1 className="text-center mb-4 mt-5 pt-5">Detalhes</h1>
      <Card className="p-4 shadow">
        <Card.Body>
          <Card.Text>
            <strong>Descrição:</strong> {product.description ? product.description : "N/A"}
          </Card.Text>
          <Card.Text>
            <strong>Cor:</strong> {product.color ? product.color : "N/A"}
          </Card.Text>
          <Card.Text>
            <strong>Tamanho:</strong> {product.size ? product.size : "N/A"}
          </Card.Text>
          <Button variant="secondary" onClick={() => navigate(-1)}>
            Voltar
          </Button>
        </Card.Body>
      </Card>
    </Container>
  );
};

export default ProductDetails;
