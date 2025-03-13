import { useState, useEffect } from "react";
import { useNavigate, Link } from "react-router-dom";
import { login } from "../services/authService";
import { Form, Button, Container, Alert, Card } from "react-bootstrap";
import { toast, ToastContainer } from "react-toastify"

const Login = () => {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [error, setError] = useState("");
  const navigate = useNavigate();

  const handleLogin = async (e) => {
    e.preventDefault();
    try {
      const response = await login(email, password);
      localStorage.setItem("token", response.data.token);
      navigate("/products");
    } catch (err) {
      toast.error("Login falhou. Verifique suas credenciais.");
    }
  };

  useEffect(() => {
    const token = localStorage.getItem("token");
    if (token) {
      navigate("/products");
    }
  }, [navigate]);

  return (
    <Container className="d-flex justify-content-center align-items-center vh-100">
      <ToastContainer />
      <Card style={{ width: "25rem" }} className="shadow p-4">
        <h2 className="text-center mb-4">Login</h2>
        {error && <Alert variant="danger">{error}</Alert>}
        <Form onSubmit={handleLogin}>
          <Form.Group controlId="formEmail">
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
              placeholder="Digite sua senha"
              required
            />
          </Form.Group>

          <Button variant="primary" type="submit" className="w-100 mt-4">
            Entrar
          </Button>
          <div className="text-center mt-3">
            <span>Não tem uma conta? </span>
            <Link to="/register">Clique aqui para criar uma</Link>
          </div>
        </Form>
      </Card>
    </Container>
  );
};

export default Login;
