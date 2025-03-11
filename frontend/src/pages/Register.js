import { useState } from "react";
import api from "../api/axios";
import { useNavigate } from "react-router-dom";
import { Form, Button, Container, Alert, Card } from "react-bootstrap";
import { toast, ToastContainer } from "react-toastify";

const Register = () => {
  const [name, setName] = useState("");
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [error, setError] = useState("");
  const navigate = useNavigate();

  const handleRegister = async (e) => {
    e.preventDefault();
    
    try {
      await api.post("/register", { name, email, password });
      toast.success("Usuário cadastrado com sucesso! 🎉", { autoClose: 3000 });
      setTimeout(() => navigate("/"), 2500);
    } catch (err) {
      if (err.response && err.response.data.errors) {
        const errors = err.response.data.errors;
        
        // Percorre os erros e exibe cada um como um toast
        Object.values(errors).forEach((errorArray) => {
          errorArray.forEach((errorMessage) => {
            toast.error(errorMessage);
          });
        });
      } else {
        toast.error("Erro ao criar conta. Tente novamente.");
      }
    }
  };

  return (
    <Container className="d-flex justify-content-center align-items-center vh-100">
      <ToastContainer />
      <Card style={{ width: "25rem" }} className="shadow p-4">
        <h2 className="text-center mb-4">Cadastro</h2>
        {error && <Alert variant="danger">{error}</Alert>}
        <Form onSubmit={handleRegister}>
          <Form.Group controlId="formName">
            <Form.Label>Nome</Form.Label>
            <Form.Control
              type="text"
              value={name}
              onChange={(e) => setName(e.target.value)}
              placeholder="Digite seu nome"
              required
            />
          </Form.Group>

          <Form.Group controlId="formEmail" className="mt-3">
            <Form.Label>Email</Form.Label>
            <Form.Control
              type="email"
              value={email}
              onChange={(e) => setEmail(e.target.value)}
              placeholder="Digite seu email"
              required
            />
          </Form.Group>

          <Form.Group controlId="formPassword" className="mt-3">
            <Form.Label>Senha</Form.Label>
            <Form.Control
              type="password"
              value={password}
              onChange={(e) => setPassword(e.target.value)}
              placeholder="Crie uma senha"
              required
            />
          </Form.Group>

          <Button variant="success" type="submit" className="w-100 mt-4">
            Cadastrar
          </Button>
          <Button 
            variant="secondary" 
            className="w-100 mt-2"
            onClick={() => navigate("/")}
          >
            Voltar para Login
          </Button>
        </Form>
      </Card>
    </Container>
  );
};

export default Register;