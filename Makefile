all:
	docker compose -f srcs/docker-compose.yaml up -d

clean:
	docker compose -f srcs/docker-compose.yaml down

fclean: clean
	yes | docker system prune

re: fclean all

prune: clean
	yes | docker system prune -a 

.PHONY: all clean fclean re prune
