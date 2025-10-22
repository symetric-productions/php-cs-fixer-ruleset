<?php

declare(strict_types=1);

namespace Symetric\PhpCsFixerRuleset;

use PhpCsFixer\RuleSet\RuleSetDefinitionInterface;

final class Ruleset implements RuleSetDefinitionInterface
{
    public function getName(): string
    {
        return '@Symetric/Default';
    }

    public function getDescription(): string
    {
        return 'Default ruleset used by Symetric Productions';
    }

    public function isRisky(): bool
    {
        return true;
    }

    public function getRules(): array
    {
        return [
            '@PER-CS3x0' => true,
            '@PER-CS3x0:risky' => true,
            'align_multiline_comment' => true,
            'array_push' => true,
            'assign_null_coalescing_to_coalesce_equal' => true,
            'attribute_empty_parentheses' => true,
            'backtick_to_shell_exec' => true,
            'binary_operator_spaces' => true,
            'blank_line_before_statement' => [
                'statements' => [
                    'break',
                    'case',
                    'continue',
                    'declare',
                    'default',
                    'do',
                    'exit',
                    'for',
                    'foreach',
                    'goto',
                    'if',
                    'include',
                    'include_once',
                    'phpdoc',
                    'require',
                    'require_once',
                    'return',
                    'switch',
                    'throw',
                    'try',
                    'while',
                    'yield',
                    'yield_from',
                ],
            ],
            'class_attributes_separation' => [
                'elements' => [
                    'method' => 'one',
                    'property' => 'one',
                    'trait_import' => 'none',
                    'case' => 'none',
                ],
            ],
            'class_definition' => true,
            'class_keyword' => true,
            'class_reference_name_casing' => true,
            'clean_namespace' => true,
            'combine_consecutive_issets' => true,
            'combine_consecutive_unsets' => true,
            'combine_nested_dirname' => true,
            'comment_to_phpdoc' => true,
            'concat_space' => ['spacing' => 'one'],
            'date_time_create_from_format_call' => true,
            'date_time_immutable' => true,
            'declare_equal_normalize' => true,
            'declare_parentheses' => true,
            'declare_strict_types' => true,
            'dir_constant' => true,
            'echo_tag_syntax' => true,
            'empty_loop_body' => ['style' => 'braces'],
            'empty_loop_condition' => true,
            'ereg_to_preg' => true,
            'explicit_indirect_variable' => true,
            'explicit_string_variable' => true,
            'fopen_flag_order' => true,
            'fully_qualified_strict_types' => ['import_symbols' => true],
            'function_to_constant' => true,
            'get_class_to_class_keyword' => true,
            'heredoc_closing_marker' => true,
            'heredoc_indentation' => true,
            'heredoc_to_nowdoc' => true,
            'implode_call' => true,
            'include' => true,
            'integer_literal_case' => true,
            'is_null' => true,
            'lambda_not_used_import' => true,
            'linebreak_after_opening_tag' => true,
            'list_syntax' => true,
            'logical_operators' => true,
            'long_to_shorthand_operator' => true,
            'magic_constant_casing' => true,
            'magic_method_casing' => true,
            'method_chaining_indentation' => true,
            'modernize_strpos' => true,
            'modernize_types_casting' => true,
            'multiline_comment_opening_closing' => true,
            'multiline_promoted_properties' => ['minimum_number_of_parameters' => 2],
            'multiline_string_to_heredoc' => true,
            'native_constant_invocation' => true,
            'native_function_casing' => true,
            'native_type_declaration_casing' => true,
            'new_expression_parentheses' => true,
            'new_with_parentheses' => true,
            'no_alias_functions' => ['sets' => ['@all']],
            'no_alias_language_construct_call' => true,
            'no_alternative_syntax' => true,
            'no_binary_string' => true,
            'no_blank_lines_after_phpdoc' => true,
            'no_empty_comment' => true,
            'no_empty_phpdoc' => true,
            'no_empty_statement' => true,
            'no_extra_blank_lines' => [
                'tokens' => [
                    'attribute',
                    'break',
                    'case',
                    'comma',
                    'continue',
                    'curly_brace_block',
                    'default',
                    'extra',
                    'parenthesis_brace_block',
                    'return',
                    'square_brace_block',
                    'switch',
                    'throw',
                    'use',
                ],
            ],
            'no_homoglyph_names' => true,
            'no_leading_namespace_whitespace' => true,
            'no_mixed_echo_print' => true,
            'no_multiline_whitespace_around_double_arrow' => true,
            'no_null_property_initialization' => true,
            'no_php4_constructor' => true,
            'no_short_bool_cast' => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'no_spaces_around_offset' => true,
            'no_superfluous_elseif' => true,
            'no_superfluous_phpdoc_tags' => true,
            'no_trailing_comma_in_singleline' => true,
            'no_trailing_whitespace_in_comment' => true,
            'no_unneeded_braces' => true,
            'no_unneeded_control_parentheses' => true,
            'no_unneeded_final_method' => true,
            'no_unneeded_import_alias' => true,
            'no_unset_cast' => true,
            'no_unset_on_property' => true,
            'no_unused_imports' => true,
            'no_useless_concat_operator' => true,
            'no_useless_else' => true,
            'no_useless_nullsafe_operator' => true,
            'no_useless_return' => true,
            'no_useless_sprintf' => true,
            'no_whitespace_before_comma_in_array' => true,
            'non_printable_character' => true,
            'normalize_index_brace' => true,
            'nullable_type_declaration' => true,
            'nullable_type_declaration_for_default_null_value' => true,
            'numeric_literal_separator' => true,
            'object_operator_without_whitespace' => true,
            'octal_notation' => true,
            'operator_linebreak' => true,
            'ordered_imports' => [
                'imports_order' => [
                    'class',
                    'function',
                    'const',
                ],
                'sort_algorithm' => 'alpha',
            ],
            'ordered_interfaces' => true,
            'ordered_traits' => true,
            'phpdoc_add_missing_param_annotation' => true,
            'phpdoc_align' => true,
            'phpdoc_annotation_without_dot' => true,
            'phpdoc_indent' => true,
            'phpdoc_line_span' => true,
            'phpdoc_no_empty_return' => true,
            'phpdoc_no_useless_inheritdoc' => true,
            'phpdoc_param_order' => true,
            'phpdoc_order' => [
                'order' => [
                    'param',
                    'return',
                    'throws',
                ],
            ],
            'phpdoc_readonly_class_comment_to_keyword' => true,
            'phpdoc_return_self_reference' => true,
            'phpdoc_scalar' => true,
            'phpdoc_separation' => [
                'groups' =>
                    [
                        [
                            'Annotation',
                            'NamedArgumentConstructor',
                            'Target',
                        ],
                        [
                            'author',
                            'copyright',
                            'license',
                        ],
                        [
                            'category',
                            'package',
                            'subpackage',
                        ],
                        [
                            'property',
                            'property-read',
                            'property-write',
                        ],
                        [
                            'deprecated',
                            'link',
                            'see',
                            'since',
                        ],
                    ],
            ],
            'phpdoc_single_line_var_spacing' => true,
            'phpdoc_to_param_type' => true,
            'phpdoc_to_property_type' => true,
            'phpdoc_to_return_type' => true,
            'phpdoc_trim' => true,
            'phpdoc_trim_consecutive_blank_line_separation' => true,
            'phpdoc_var_annotation_correct_order' => true,
            'phpdoc_var_without_name' => true,
            'pow_to_exponentiation' => true,
            'protected_to_private' => true,
            'psr_autoloading' => true,
            'random_api_migration' => true,
            'regular_callable_call' => true,
            'return_assignment' => true,
            'set_type_to_cast' => true,
            'self_static_accessor' => true,
            'semicolon_after_instruction' => true,
            'simple_to_complex_string_variable' => true,
            'simplified_if_return' => true,
            'simplified_null_return' => true,
            'single_class_element_per_statement' => true,
            'single_import_per_statement' => true,
            'single_line_comment_spacing' => true,
            'single_line_comment_style' => true,
            'single_quote' => true,
            'single_trait_insert_per_statement' => true,
            'space_after_semicolon' => ['remove_in_empty_for_expressions' => true],
            'standardize_increment' => true,
            'standardize_not_equals' => true,
            'strict_comparison' => true,
            'strict_param' => true,
            'string_implicit_backslashes' => true,
            'string_length_to_empty' => true,
            'string_line_ending' => true,
            'switch_continue_to_break' => true,
            'ternary_to_null_coalescing' => true,
            'trim_array_spaces' => true,
            'type_declaration_spaces' => true,
            'types_spaces' => true,
            'unary_operator_spaces' => true,
            'use_arrow_functions' => true,
            'void_return' => true,
            'whitespace_after_comma_in_array' => true,
            'yoda_style' => [
                'equal' => false,
                'identical' => false,
                'less_and_greater' => false,
            ],
        ];
    }

    /**
     * @deprecated Since symetric/php-cs-fixer-ruleset 1.2: Using "Ruleset::rules()" is deprecated and will be removed in 2.0. See UPGRADE.md for more info.
     */
    public static function rules(): array
    {
        @trigger_error(sprintf('Since symetric/php-cs-fixer-ruleset 1.2: Using "%s" is deprecated and will be removed in 2.0. See UPGRADE.md for more info.', __METHOD__), \E_USER_DEPRECATED);

        return (new self())->getRules();
    }
}
