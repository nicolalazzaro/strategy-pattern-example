# Strategy pattern

Strategy is a behavioral design pattern that lets you define a family of algorithms, put each of them into a separate class, and make their objects interchangeable.
[Learn more here](https://refactoring.guru/design-patterns/strategy).

# Considerations

This example demonstrates the **Strategy Pattern**, encapsulating arithmetic operations such as addition, subtraction, and multiplication within separate strategies.

In a real-world scenario, this approach can be used to delegate tasks like calculating the shipping cost of an order. For example, a seller might choose between different pricing strategies, such as a **per-unit cost** or a **fixed fee**. When a new pricing model is needed, a new strategy can be implemented while maintaining a consistent interface, ensuring the codebase remains flexible, organized, and easily extendable.

# How to use

This example can be run using Docker. Build and start the container with the `docker compose up` command, log in and run the `php client.php` command.
